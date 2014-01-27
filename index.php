<?php
    require_once('clases/Conectar.php');
    require_once('clases/hosts.php');
    require_once('clases/usuarios.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TaxesCS</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/NewsGoth_400.font.js" type="text/javascript"></script>
    <script src="js/NewsGoth_700.font.js" type="text/javascript"></script>
    <script src="js/NewsGoth_Lt_BT_italic_400.font.js" type="text/javascript"></script>
    <script src="js/Vegur_400.font.js" type="text/javascript"></script> 
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/jquery.featureCarousel.js" type="text/javascript"></script>     
    <script src="http://www.colombia.com/includes/2007/enlaces/actualidad_indicadores.js"></script>
    
</head>
<body id="page1">
    	<!--==============================header=================================-->
        <header>
            <div class="row-top">
                <div style="display:table-cell"><img src="images/logo.png" /></div>
                <div style="display:table-cell; width: 590px"><p style="color: #6a810c; padding-top: 30px; font-size: 30px; text-shadow: 4px 4px #e8e8d0;">Una nueva visi&oacute;n de la contadur&iacute;a</p></div>
                <div style="display:table-cell" class="entrada">
                <?php
                    if(isset($_SESSION['usuario'])){
                        echo '<div><img src="images/persona.png" />Bienvenid@</div>';
                        echo '<div><img src="images/candado.png" /><a href="salir.php" id="salida" >Cerrar Sesión</a></div>';
                    }else{
                        echo '<div><img src="images/persona.png" /><input type="text" id="user" /></div>';
                        echo '<div><img src="images/candado.png" /><input type="password" id="pass" /></div>';
                    }
                ?>
                </div>
            </div>
            <div class="menu-row">
                <div class="menu-bg">
                    <div class="main">
                        <ul class="menu wrapper">
                                <li><a href="index.php?controller=inicio">Inicio</a></li>
                                <?php
                                    if(isset($_SESSION['usuario'])){
                                        echo'<li><a href="index.php?controller=nueva">Crear Noticias</a></li>';
                                        echo '<li><a href="index.php?controller=programa">Nuevo Calendario</a></li>';
                                    }else{
                                        echo'<li><a href="index.php?controller=conozcanos">Conozcanos</a></li>';
                                        echo '<li><a href="index.php?controller=servicios">Servicios</a></li>';
                                    }
                                ?>
                                <li><a href="index.php?controller=noticias">Noticias</a></li>
                                <li><a href="index.php?controller=calendario">Calendario Tributario</a></li>
                                <li><a href="index.php?controller=contacto">Contactenos</a></li>
                        </ul>
                    </div>
                </div>
            </div>   
	</header>
        
        <!--==============================content================================-->
        <?php
            $controller=$_GET['controller'];
            if(!isset($controller)){
                $controller ='inicio';
            }
				
            switch($controller){
                case 'inicio':
                        include('inicio.php');
                        include('indicadores.php');
                        include('footer.php');
                        break;
                case 'conozcanos':
                        include('conozcanos.php');
                        include('footer.php');
                        break;
                case 'servicios':
                        include('servicios.php');
                        include('footer.php');
                        break;
                case 'noticias':
                        include('noticias.php');
                        include('footer.php');
                        break;
                case 'calendario':
                        include('calendario.php');
                        include('footer.php');
                        break;
                case 'contacto':
                        include('contacto.php');
                        break;
                case 'nueva':
                        include('editor.php');
                        break;
                case 'programa':
                        include('calendarios.php');
                        break;
                case 'carga':
                        include('confirma-carga.php');
                        break;
                case 'test':
                        include('test.php');
                        break;
            }			
        ?>        
        <!--==============================content================================-->
        
	<script type="text/javascript"> Cufon.now(); </script>
	<script type="text/javascript">
            $('#pass').keyup(function(e){
                if (e.keyCode==13) {
                    var usuario=$('#user').val();
                    var clave=$('#pass').val();      
                    $.ajax({
                        type:"post",
                        url:"controller/iniciar.php",
                        data: {
                            'user':usuario,
                            'pass':clave,
                            'tipo':'entrada'
                        },
                        success: function (response){
                            if(response==1){
                                var form = '<div><img src="images/persona.png" />Bienvenid@</div><div><img src="images/candado.png" /><a href="salir.php" id="salida" >Cerrar Sesión</a></div>'
                                $('.entrada').html(form)
                                window.location='index.php';
                            }else{
                                alert('Verifique sus datos')
                                var form = '<div><img src="images/persona.png" /><input type="text" id="user" /></div><div><img src="images/candado.png" /><input type="password" id="pass" /></div>'
                                $('.entrada').html(form)
                            }
                        }
                    })
                }
            })
	</script>
        
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-46481220-1', 'taxescs.com');
            ga('send', 'pageview');
        </script>
</body>
</html>
