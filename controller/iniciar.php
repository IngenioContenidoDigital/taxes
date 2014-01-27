<?php
    include_once '../clases/usuarios.php';
    session_start();
    $login = new Usuario();
    if($_POST['tipo']=='entrada'){
        $login->Login($_POST['user'],md5($_POST['pass']));
        echo $login->Conectado();
    }else{
        $login->Logout();
    }
?>