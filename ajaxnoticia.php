<?php
    require_once('clases/Conectar.php');
    require_once('clases/hosts.php');
    session_start();
    
    $titulo= $_POST['titulo'];
    $noticia= $_POST['noticia'];
    
    $bd = new Conectar();
    $bd->Conecta(HOST, USER, PASS, DB);
                                            
    $consulta="INSERT INTO noticias (Titulo, Contenido) VALUES ('".$titulo."','".$noticia."')";
    $bd->Consulta($consulta);
    
    echo "registrado";
?>

