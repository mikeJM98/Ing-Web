<!DOCTYPE html>
<html>
<head>
	<title>Excel Basico</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascrip" src="index.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div id="cuerpo">
		<header>Libro1 - Excel</header>
		<div id="botones">
			<input type="button" name="Copiarntrolc" value=" Control+C ">
			<input type="button" name="Pegar" value=" Control+V ">
			<input type="button" name="cortar" value=" Control+X ">
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