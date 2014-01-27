<div class="cuerpo">
	<div class="main">
		<div class="contenedor-servicio">
		<div class="servicio">
			<br>
			<div>
				<h4>Gerencia Contable</h4>			
				<img class="img-border" src="images/page4-img2.jpg" alt="" />
				<ul class="list-2">
					<li><a href="#" id="asc">Asesoría contable</a></li>
					<li><a href="#" id="org">Organizaci&oacute;n de la contabilidad</a></li>
					<li><a href="#" id="pre1">Presentaci&oacute;n de estados financieros</a></li>
				</ul>
			</div>
			<div>
				<h4>Auditoría y Revisoría Fiscal</h4>				
						<img class="img-border" src="images/page4-img5.jpg" alt="" />					
						<ul class="list-2">
							<li><a href="#" id="rev">Revisoría Fiscal</a></li>
							<li><a href="#" id="con">Control interno</a></li>
							<li><a href="#" id="aud1">Auditoría externa</a></li>
							<li><a href="#" id="aud2">Auditoría de calidad</a></li>
						</ul>					            				
			</div>
		</div>            
		<div class="servicio">
			<br>
			<div>
				<h4>Gerencia Tributaria</h4>			
					<img class="img-border" src="images/page4-img6.jpg" alt="" />					
					<ul class="list-2">
						<li><a href="#" id="pre2">Declaraciones tributarias</a></li>
						<li><a href="#" id="ate">Atención de requerimientos</a></li>
						<li><a href="#" id="med">Medios magnéticos</a></li>
						<li><a href="#" id="pla">Planeación tributaria</a></li>
						<li><a href="#" id="tra">Tr&aacute;mite de devoluciones y compensaciones</a></li>
					</ul>			
			</div>
			<div>
				<h4>Gerencia Financiera</h4>				
						<img class="img-border" src="images/page4-img3.jpg" alt="" />
										
						<ul class="list-2">
							<li><a href="#" id="eva">Evaluación de proyectos</a></li>
							<li><a href="#" id="val">Valoración de empresas</a></li>
							<li><a href="#" id="ana">Análisis financiero</a></li>
							<li><a href="#" id="tax">Atención de consultas</a></li>
						</ul>						
			</div>
		</div>						
					
		<div id="mensaje" class="mensaje">
			<div class="fondo">
				<div id="titulo" class="titulo"></div>
				<br />
				<div id="contenido" class="contenido"></div>
			</div>
			<div class="cierre"><img src="images/close.png" id="cierre"/></div>
		</div>            							
	</div>                                        					
</div>
</div>
                       

<script>
	$(document).ready(function(){
		$('#mensaje').hide();
	})
       
	$('#cierre').click(function(){
		$('#mensaje').fadeOut("slow");
	})
	
	$('.list-2 a').click(function(){
		var res = $(this).attr('id')
		var msg="";
		var tit="";
		switch(res){
			case 'asc':
				msg="Tome decisiones de la mano de profesionales; haga de la contabilidad una herramienta de negocios";
                    tit="Asesoria Contable"
                    break;
                case 'org':
                    msg="Organizamos su contabilidad en nuestro software o en el software de su propiedad; nunca más contabilidad atrasada"
                    tit="Organizaci&oacute;n y sistematizaci&oacute;n de la contabilidad"
                    break;
                case 'pre1':
                    msg="Cuente con estados financieros reales y a tiempo; los requeridos por la ley y los de propósito especial hechos a su medida"
                    tit="Presentaci&oacute;n de estados financieros"
                    break;
                case 'pre2':
                    msg="No pague por multas, correcciones, sanciones e intereses; declaraciones nacionales y distritales a tiempo"
                    tit="Presentación oportuna de declaraciones tributarias"
                    break;
                case 'ate':
                    msg="Nuestro paquete integral de servicios, incluye la atención de requerimientos nacionales y/o distritales"
                    tit="Atención de requerimientos"
                    break;
                case 'med':
                    msg="Con una contabilidad organizada y al día, los medios magnéticos nacionales y/o distritales no volveran a ser un problema"
                    tit="Medios magnéticos"
                    break;
                case 'pla':
                    msg="Pague lo justo cumpliendo con las normas vigentes, optimice sus impuestos y su flujo de caja"
                    tit="Planeación tributaria"
                    break;
                case 'tra':
                    msg="Sin que le cueste más, disfrute de la asesoría para los trámites ante la DIAN incluidos en nuestro paquete integral de servicios"
                    tit="Tr&aacute;mite de devoluciones y compensaciones"
                    break;
                case 'rev':
                    msg="Proteja adecuadamente su patrimonio mientras ejecuta su operación con la maxima eficiencia"
                    tit="Revisoría Fiscal"
                    break;
                case 'con':
                    msg="Elabore, revise, optimice y mantenga un adecuado control de sus procedimientos para beneficio de toda la organización"
                    tit="Control interno"
                    break;
                case 'aud1':
                    msg="Permitanos brindarle nuesto apoyo, desde una revisión específica hasta la ejecución de un Due diligence"
                    tit="Auditoría externa"
                    break;
                case 'aud2':
                    msg="Mantenga al día u obtenga la certificación de normas de calidad correspondiente a su negocio"
                    tit="Auditoría de calidad"
                    break;
                case 'eva':
                    msg="Tenga a mano diversas alternativas de evaluación antes de llevar a cabo su proyecto"
                    tit="Evaluación de proyectos"
                    break;
                case 'val':
                    msg="¿Sabe cuánto vale su empresa hoy? ¿Sabe cuánto puede llegar a valer en el futuro?"
                    tit="Valoración de empresas"
                    break;
                case 'ana':
                    msg="Aplicación de diferentes herramientas para evaluar los resultados de sus negocios y tomar decisiones a tiempo"
                    tit="Análisis financiero"
                    break;
                case 'tax':
                    msg="SU MEJOR ALIADO EN TEMAS CONTABLES, TRIBUTARIOS Y FINANCIEROS"
                    tit="Taxes, Consulting & Services S.A.S."
                    break;
            }
            $('#titulo').html(tit);
            $('#contenido').html(msg);
            
            $('#mensaje').fadeIn("slow");
            
        })
    </script>