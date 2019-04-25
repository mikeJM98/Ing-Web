<!DOCTYPE html>
<html>
<head>
	<title>Excel Basico</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script>
		$(document).ready(function(){
			$(".cab").mousedown(function(){
				valor=$(this).data("valor");
				pos=$(this).data("pos");
				if(pos=="arriba"){
					cad="";
					for(i=1; i<=100; i++){
						cad=cad+"#"+valor+i+",";
					}
					$(cad+"#D").css("background-color","#C6C6C6");
				}else{   
					Letras = new Array("","A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
					cad="";
					for(i=1; i<=27; i++){
						cad=cad+"#"+Letras[i]+valor+",";
					}  
					$(cad+"#D").css("background-color","#C6C6C6");
				}
			});
		
			$(".cab").mouseup(function(){
				valor=$(this).data("valor");
				pos=$(this).data("pos");
				if(pos=="arriba"){
					cad="";
					for(i=1; i<=100; i++){
						cad=cad+"#"+valor+i+",";
					}
					$(cad+"#D").css("background-color","#fff");
				}
				else{
					Letras = new Array("","A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
					cad="";
					for(i=1; i<=27; i++){
						cad=cad+"#"+Letras[i]+valor+",";
					}  
					$(cad+"#D").css("background-color","#fff");
				}
			});
			
			$(".celda").mouseenter(function(){
				letra=$(this).data("letra");
				num=$(this).data("num");
				$("#cel_"+letra).css("background-color","#666");
				$("#cel_"+letra).css("border-bottom","2px solid #000");
				$("#cel_"+num).css("background-color","#666");
				$("#cel_"+num).css("border-right","2px solid #000");
			});

			$(".celda").mouseleave(function(){
				letra=$(this).data("letra");
				num=$(this).data("num");
				$("#cel_"+letra).css("background-color","#ccc");
				$("#cel_"+letra).css("border-bottom","2px solid #ccc");
				$("#cel_"+num).css("background-color","#ccc");
				$("#cel_"+num).css("border-right","2px solid #ccc");
			});

			ULTIMACELDA_L="";
			ULTIMACELDA_N="";

			$(".celda").dblclick(function(){
				letra=$(this).data("letra");
				num=$(this).data("num");

				if($(this).html()==""){
					$(this).html("<input type='text' class='cuadro_texto' id='input_"+letra+num+"' />");
					$("#input_"+letra+num).focus();
				}else{
					valor_input=$("#input_"+letra+num).val();
					if(typeof(valor_input) === "undefined"){ 
						valor_input=$("#"+letra+num).html();
					}
 					$(this).html("<input type='text' value='"+valor_input+"' class='cuadro_texto' id='input_"+letra+num+"' />");
					$("#input_"+letra+num).focus();
				}
				ULTIMACELDA_L=letra;
				ULTIMACELDA_N=num;
			});

			ultima_celda_mouse_l="";
			ultima_celda_mouse_n="";

			$(".celda").click(function(){
				$(this).css("border","solid 1px #000"); //pone borde
 				if(ultima_celda_mouse_l!=""){   
			  		$("#"+ultima_celda_mouse_l+ultima_celda_mouse_n).css("border","solid 1px #ccc");
				}
			
				if(ULTIMACELDA_L!=""){
			  		$("#" + ULTIMACELDA_L + ULTIMACELDA_N).html($("#input_" + ULTIMACELDA_L + ULTIMACELDA_N).val());
				}
				ultima_celda_mouse_l=$(this).data("letra");
				ultima_celda_mouse_n=$(this).data("num");
				//ejecuta formula
				valor_capturado=$("#"+ULTIMACELDA_L+ULTIMACELDA_N).html()
				if(valor_capturado.substr(0, 7)=="=sumar("){
					valor_capturado=valor_capturado.substr(7,valor_capturado.length-8)
					celdas = valor_capturado.split(",");//convierte en array
					s=0;
					for(i=0;i<celdas.length;i++){
						s=s+parseFloat($("#"+celdas[i]).html());
					}
					$(this).html(s);  
				}
			});

			$(".celda").keypress(function(e){
         		var code = (e.keyCode ? e.keyCode : e.which);
	        	if(code==13){
	            	$(this).click();
	        	}
   		 	});	 
		});

		function disableselect(e){
			return false
		}
	
		function reEnable(){
			return true
		}
	
		document.onselectstart = new Function ("return false")
		if(window.sidebar){
			document.onmousedown=disableselect
			document.onclick=reEnable
		}
	</script>
	<style type="text/css">
		#cuerpo{display: block; width: 1070px; border: 1px solid #000; margin-left: 7%;}
		header{ background-color: #E0CEBB; text-align: center}
		input{ border:#f0f0f0 solid 1px; height: 40px; cursor: pointer;   }
		.bloc{ display: block; }
		#bloque{ background-color: #ddd; vertical-align: top; }
		#bloque_celdas{ background-color: #fff; margin: 10px 30px 10px 30px; padding: 3px; overflow: scroll; display: block; width: 1000px; height: 500px; }
		table{ width: 2000px;  }
		table tr td {  text-align: center; border: #D4D4D4 solid 1px }
		.cab{ cursor:pointer; font-weight: bold; }
		.cab:hover{ background-color: #666 }
		.celda:hover{  cursor: crosshair; border: #000 solid 1px; }
		table{border: solid 1px #666}
		.cuadro_texto{ height: 20px; width: 80px; background-color: #f0f0f0; }
	</style>
</head>
<body>
	<div id="cuerpo">
		<header>Libro1 - Excel</header>
		<div id="botones">
			<input type="button" name="controlc" value=" Control+C ">
			<input type="button" name="controlv" value=" Control+V ">
			<input type="button" name="controlx" value=" Control+X ">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="button" name="color1" value="  " style="background-color: red">
			<input type="button" name="color2" value="  " style="background-color: blue">
			<input type="button" name="color3" value="  " style="background-color: yellow">
			<input type="button" name="color4" value="  " style="background-color: green"><hr>
		</div>
		<div id="bloque" class="bloc">
			&nbsp;
			<div id="bloque_celdas" class="bloc"> 			
				<table cellpadding="0" cellspacing="0">
					<?php
						$L = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");	
						echo "<tr bgcolor='#ccc'>
							<td width='20px'></td>";
							 	foreach($L as $let){
							 		echo "<td width='80px' class='cab' data-valor='$let' data-pos='arriba' height='20px' id='cel_$let'> $let </td>";	
							 	}
							 	echo "</tr>";

								for($i=1; $i<=100; $i++){
							 		echo "<tr>
							 			<td bgcolor='#ccc'  data-valor='$i' data-pos='izquierda'  class='cab' id='cel_$i'> $i </td>";
									    foreach ($L as $let){
									    	echo "<td width='80px' height='20px' class='celda' data-letra='$let' data-num='$i' id='$let$i'></td>";
								}
							echo "</tr>";
						}
					?>					
				</table>				
			</div>
			&nbsp;
		</div>
	</div>
</body>
</html>