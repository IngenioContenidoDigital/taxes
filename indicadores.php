<script type="text/javascript">
	$(document).ready(function(){
		$('#trm').html('<b style="float:right">'+IndDolTRM+'</b>')
		$('#euro').html('<b style="float:right">'+IndEuro+'</b>')
		$('#dtf').html('<b style="float:right">'+IndDTF+'</b>')
		$('#igbc').html('<b style="float:right">'+IndIGBC+'</b>')
		$('#uvr').html('<b style="float:right">$'+IndUVR+'</b>')
		$('#wti').html('<b style="float:right">USD '+IndPet+'</b>')
		$('#cafe').html('<b style="float:right">USD '+IndCaf+'</b>')
		
		var myDate=new Date();
		var month = myDate.getMonth() + 1
		var day = myDate.getDate()
		var year = myDate.getFullYear()
		switch(month){
			case 1:
				month='Ene'
				break;
			case 2:
				month='Feb'
				break;
			case 3:
				month='Mar'
				break;
			case 4:
				month='Abr'
				break;
			case 5:
				month='May'
				break;
			case 6:
				month='Jun'
				break;
			case 7:
				month='Jul'
				break;
			case 8:
				month='Ago'
				break;
			case 9:
				month='Sep'
				break;
			case 10:
				month='Oct'
				break;
			case 11:
				month='Nov'
				break;
			case 12:
				month='Dic'
				break;
			}
			$('#actualiza').html("&Uacute;ltima Actualizaci&oacute;n: &nbsp;" + day + "-" + month + "-" + year)
		})
</script>
<div class="cuerpo">
<div class="main">					
	<h3>Indicadores Económicos</h3>
	<br>
	<br>
        <div>
            <div class="bloque-indicadores">
                <table class="indicadores" >
                    <tr><td colspan="2"><div class="encabezado"></div></td></tr>
                    <tr><td colspan="2"><div class="encabezado">UVT</div></td></tr>
                    <tr>
                        <td><b style="text-align: left;">2012:</b></td>
                        <td><div class="indicador">$ 26.049</div></td>
                    </tr>
                    <tr>
                        <td><b style="text-align: left;">2013:</b></td>
                        <td><div class="indicador">$ 26.841</div></td>
                    </tr>
                    <tr>
                        <td><b style="text-align: left;">2014:</b></td>
                        <td><div class="indicador">$ 27.485</div></td>
                    </tr>
                    <tr><td colspan="2"><div class="encabezado">IMPUESTOS 2014</div></td></tr>
                    <tr>
                        <td><b style="text-align: left;">Renta:</b></td>
                        <td><div class="indicador">25%<div></td>
                    </tr>
                    <tr>
                        <td><b style="text-align: left;">CREE:</b></td>
                        <td><div class="indicador">9%</div></td>
                    </tr>
                    <tr>
                        <td><b style="text-align: left;">IVA (Tarifa general):</b></td>
                        <td><div class="indicador">16%</div></td>
                    </tr>
                    <tr><td colspan="2"><div class="encabezado">SANCIONES 2014</div></td></tr>
                    <tr>
                        <td><b style="text-align: left;">Mínima:</b></td>
                        <td><div class="indicador">$ 275.000</div></td>
                    </tr>
                    <tr>
                        <td><b style="text-align: left;">Mínima ICA Bogotá:</b></td>
                        <td><div class="indicador">$ 164.000</div></td>
                    </tr>
                </table>
            </div>
            <div class="bloque-indicadores">
                <table class="indicadores" >
                    <tr><td colspan="2"><div class="encabezado"></div></td></tr>
                    <tr><td colspan="2"><div class="encabezado">SALARIO MINIMO</div></td></tr>
                    <tr>
                        <td><b style="text-align: left;">2012:</b></td>
                        <td><div class="indicador">$ 566.700</div></td>
                    </tr>
                    <tr>
                        <td><b style="text-align: left;">2013:</b></td>
                        <td><div class="indicador">$ 589.500</div></td>
                    </tr>
                    <tr>
                        <td><b style="text-align: left;">2014:</b></td>
                        <td><div class="indicador">$ 616.000</div></td>
                    </tr>
                    <tr><td colspan="2"><div class="encabezado">AUXILIO DE TRANSPORTE</div></td></tr>
                    <tr>
                        <td><b style="text-align: left;">2012:</b></td>
                        <td><div class="indicador">$ 67.800</div></td>
                    </tr>
                    <tr>
                        <td><b style="text-align: left;">2013:</b></td>
                        <td><div class="indicador">$ 70.500</div></td>
                    </tr>
                    <tr>
                        <td><b style="text-align: left;">2014:</b></td>
                        <td><div class="indicador">$ 72.000</div></td>
                    </tr>
                    <tr><td colspan="2"><div class="encabezado">SALARIO MINIMO INTEGRAL</div></td></tr>
                    <tr>
                        <td><b style="text-align: left;">2012:</b></td>
                        <td><div class="indicador">$ 7.367.100</div></td>
                    </tr>
                    <tr>
                        <td><b style="text-align: left;">2013:</b></td>
                        <td><div class="indicador">$ 7.663.500</div></td>
                    </tr>
                    <tr>
                        <td><b style="text-align: left;">2014:</b></td>
                        <td><div class="indicador">$ 8.008.000</div></td>
                    </tr>
                </table>
            </div>
            <div class="bloque-indicadores">
                <table class="indicadores" >
                    <tr><td colspan="2"><div class="encabezado" id="actualiza"></div></td></tr>
                    <tr><td colspan="2"><div class="encabezado">DOLAR HOY</div></td></tr>
                    <tr>
                            <td ><b style="text-align: left;">TRM:</b></td>
                            <td id="trm"></td>
                    </tr>
                    <tr><td colspan="2"><div class="encabezado">Otros Indicadores</div></td></tr>
                    <tr>
                            <td><b style="text-align: left;">Euro:</b></td>
                            <td id="euro"></td>
                    </tr>
                    <tr>
                            <td><b style="text-align: left;">DTF:</b></td>
                            <td id="dtf"></td>
                    </tr>
                    <tr>
                            <td><b style="text-align: left;">IGBC:</b></td>
                            <td id="igbc"></td>
                    </tr>
                    <tr>
                            <td><b style="text-align: left;">UVR:</b></td>
                            <td id="uvr"></td>
                    </tr>
                    <tr>
                            <td style="width: 120px;"><b style="text-align: left;">Petr&oacute;leo WTI:</b></td>
                            <td id="wti"></td>
                    </tr>
                    <tr>
                            <td><b style="text-align: left;">Caf&eacute; (Libra):</b></td>
                            <td id="cafe"></td>
                    </tr>
                </table>
                <p style="font-size: xx-small;">Fuente: colombia.com</p>
            </div>
        </div>
</div>
</div>