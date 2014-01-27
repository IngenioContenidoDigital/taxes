<?php
    require_once('clases/Conectar.php');
    require_once('clases/hosts.php');
    $estado=0;
    $ruta="images/tributario";
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);
    if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "image/png"))
        && ($_FILES["file"]["size"] < 200000)
        && in_array($extension, $allowedExts)){
            if ($_FILES["file"]["error"] > 0){
                $estado=1;
            }else{
                if (file_exists("images/tributario/" . $_FILES["file"]["name"])){
                    $estado=2;
                }else{
                    move_uploaded_file($_FILES["file"]["tmp_name"],"images/tributario/" . $_FILES["file"]["name"]);
                    $estado=3;
                    $archivo=$_FILES["file"]["name"];
                    $tipo=$_FILES["file"]["type"];
                    $tamano=$_FILES["file"]["size"];
                    $titulo=$_POST['titulo'];
                    
                    $bd = new Conectar();
                    $bd->Conecta(HOST, USER, PASS, DB);
                    $consulta="INSERT INTO calendario (Nombre, Url) VALUES ('".$titulo."','images/tributario/".$archivo."')";
                    $bd->Consulta($consulta);
                    $bd->Cerrar();
                }
            }
    }else{
        $estado=4;
    }
    header("Location: index.php?controller=carga&estado=$estado&archivo=$archivo&tipo=$tipo&tamano=$tamano");
?>