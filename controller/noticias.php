<?php
    require_once('../clases/Conectar.php');
    require_once('../clases/hosts.php');
    session_start();
    
    $idnoticia=$_POST['id'];
    $db = new Conectar();
    $db->Conecta(HOST, USER, PASS, DB);
    $sql="DELETE FROM noticias WHERE IdNoticia=$idnoticia";
    $db->Consulta($sql);
    $db->Cerrar();
    echo 'eliminado';
?>