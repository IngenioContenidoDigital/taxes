<?php
    require_once('twitteroauth.php'); //Path to twitteroauth library
    $twitteruser = "taxescs";
    $notweets = 4;
    $consumerkey = "nl6LqekCL6XNemEqOxkiAg";
    $consumersecret = "jIXxDifSgzpnzHJQetS9a9APCt737vZ7KwcheqjRM";
    $accesstoken = "1602373165-J8V1RgZYf4t3wz8Y67EyA4fX9caQUM7m8t81VZj";
    $accesstokensecret = "sXP1hRercCG77vI3j6I8egBpEDyIELTDhykJYE0pfUA";
 
    function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
        $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
        return $connection;
    }
 
    $connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
    $tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
    //Check twitter response for errors.
    if ( isset( $tweets->errors[0]->code )) {
        // If errors exist, print the first error for a simple notification.
        echo "Error encountered: ".$tweets->errors[0]->message." Response code:" .$tweets->errors[0]->code;
    }else{
        // No errors exist. Write tweets to json/txt file.
        $listanoticias=json_encode($tweets);        
        $noticias=json_decode($listanoticias);
    }    
    
?>
<div class="cuerpo">
	<div class="main">						
		<h3>Noticias</h3>
		<div class="bloque-noticias">
			<div class="contenedor-noticias">
				<div class="noticia">
                                        <?php
                                            $bd = new Conectar();
                                            $bd->Conecta(HOST, USER, PASS, DB);
                                            
                                            $consulta="SELECT noticias.IdNoticia, noticias.Titulo, noticias.Contenido, noticias.Fecha FROM noticias ORDER BY noticias.IdNoticia DESC";
                                            
                                            $bd->Consulta($consulta);
                                            while($rs=$bd->Resultado()){
                                                echo '<div><div style="display:table-cell; width: 430px;"><h4>'.$rs['Titulo'].'</h4></div>';
                                                $usuario = new Usuario();
                                                if ($usuario->Privilegios($_SESSION['perfil'], 'EliminaNoticias')){
                                                    echo '<div style="display:table-cell; width:20px;" class="elimina-noticia" cual="'.$rs['IdNoticia'].'"><img src="images/delete.png" /></div>';
                                                }
                                                echo '</div><br>';
                                                echo '<div class="cuerpo-noticia">'.$rs['Contenido'].'</div>';
                                                echo '<br><hr>';
                                                        
                                            }
                                        ?>
				</div>
			</div>
			<div>
			<table width="100%" border="1">
				<tr>
					<td>
						<div style="display:inline;">
							<div style="display:table-cell;width: 80px;"><img src="images/twitter.png" /></div>
							<div style="display:table-cell;padding-top:15px;"><h4>Nuestras Noticias en twitter</h4></div>
						</div>
						<div class="twitter">
							<ul>
							<?php
								echo '<li>'.$noticias[0]->text.'</li><hr>';
								echo '<li>'.$noticias[1]->text.'</li><hr>';
								echo '<li>'.$noticias[2]->text.'</li><hr>';
								echo '<li>'.$noticias[3]->text.'</li><hr>';
							?>
							</ul>
						</div>
					</td>
				</tr>
			</table>
                        <div style="padding-left: 10px;">
                        <img src="images/facebook.png" />
                        <div class="facebook">
                        <?php
                            include_once ('tools/facebook/src/facebook.php');
                            $facebook = new Facebook(array(  
                                'appId'  => '178317615695630',  
                                'secret' => 'f2a7830017ce41655386bc04401d4ac1',  
                                'cookie' => true,  
                            ));     
                            $result = $facebook->api(array(  
                                'method' => 'fql.query',  
                                'query' => 'select fan_count, website, about from page where page_id=398783846843423;'  
                            ));  
//210387789060992 Ingenio    
//398783846843423 Taxes
                            $fb_fans = $result[0]['fan_count']; 
                            $info = $result[0]['website'];
                            $about = $result[0]['about'];
                            echo '<div><a href="http://www.facebook.com/Taxescs" target="_blank">TaxesCS en Facebook</a><img src="images/like.png" /><span>1634</span></div>';
                            echo '<div><b>Acerca de Nosotros:</b></div>';
                            //echo '<div>'.$about.'</div><br/>';
                            echo '<div>TAXES, CONSULTING & SERVICES S.A.S., es una empresa colombiana, jóven, dinámica y legalmente constituida, que cuenta con un equipo de contadores públicos, altamente calificados y en constante capacitación y actualización, con amplia experiencia en temas contables, tributarios y financieros, comprometidos con nuestra profesión y con nuestros clientes.</div>';

                        ?>                          
                            <div id="fb-root"></div>
                            <div class="fb-like" data-href="https://www.facebook.com/Taxescs" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                        </div>
                        </div>
			</div>
		</div>
	</div>
</div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=178317615695630";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    
    $('.elimina-noticia').click(function(){
        var id = $(this).attr('cual');
        $.ajax({
            type:"post",
            url:"controller/noticias.php",
            data: {'id':id},
            success: function(response){
                if (response=="eliminado"){
                    alert('La Noticia seleccionada ha sido eliminada de forma exitosa');
                }else{
                    alert('Se presentaron problemas con el proceso, por favor intente nuevamente.');
                }
                window.location="index.php?controller=noticias";
            }
        })
    })
    
</script>