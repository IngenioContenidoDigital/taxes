<?php
    $correo=$_POST['email'];
    $asunto=$_POST['subject'];
    $mensaje=$_POST['mensaje'];
    
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $cabeceras .= 'From: '.$correo. "\r\n";  
    $cabeceras .= 'Bcc: luis.quinones@ingeniocontenido.co';
        
    mail('contactenos@taxescs.com',$asunto,$mensaje,$cabeceras);
    header('Location: index.html');
?>