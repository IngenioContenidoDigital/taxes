<?php
	session_start();
	require('clases/usuarios.php');
	$login = new Usuario();
	$login->Logout();
	header("Location: index.php"); 
?>