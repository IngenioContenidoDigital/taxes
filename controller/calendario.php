<?php
    require_once('../clases/Conectar.php');
    require_once('../clases/hosts.php');
    session_start();
    
    $idcalendario=$_POST['id'];
    $ruta='../'.$_POST['ruta'];
    $db = new Conectar();
    $db->Conecta(HOST, USER, PASS, DB);
    $sql="DELETE FROM calendario WHERE IdCalendario=$idcalendario";
    $db->Consulta($sql);
    $db->Cerrar();
    unlink($ruta);
    echo 'eliminado';
?>