<!DOCTYPE html>
<html>
<head>
	<title>Practica Ing Web</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascrip" src="index.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body class="p-3 mb-2 bg-primary text-white">
	<div id="cuerpo">
		<header>Libro1 - Excel</header>
		<div id="botones">
			<input type="button" name="controlc" value="Copiar">
			<input type="button" name="controlv" value="Pegar ">
			<input type="button" name="controlx" value="Cortar">
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>