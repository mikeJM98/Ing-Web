<!DOCTYPE html>
<html>
<head>
	<title>Practica Ing Web</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="jquery.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script type="text/javascrip" src="index1.js"></script>
	<link rel="stylesheet" type="text/css" href="index1.css">
</head>
<body>
	<div class="container" id="app">
		<div class="row">
			<div class="col col-6">
			<input type="button" name="copiar" value="Copiar" class="btn btn-outline-primary">
			<input type="button" name="pegar" value="Pegar " class="btn btn-outline-success">
			<input type="button" name="cortar" value="Cortar" class="btn btn-outline-danger">
			<input type="button" name="negrita" value="Negrita" class="btn btn-outline-dark">
			<input type="button" name="mas" value=" + " class="btn btn-outline">
			<input type="button" name="menos" value=" - " class="btn btn-outline">
		</div>
		<div class="col col-6">
			<h4>Colores</h4>
			<input type="button" class="btn btn-primary">
			<input type="button" class="btn btn-secondary text-white">
			<input type="button" class="btn btn-success text-white">
			<input type="button" class="btn btn-danger text-white">
		</div>
		</div>
				<table class="table table-bordered">
					<?php
						$abc = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");	
						echo "<tr>
							<td>#</td>";
							 	foreach($abc as $valor){
							 		echo "<td> $valor </td>";	
							 	}
							 	echo "</tr>";

								for($i=1; $i<=50; $i++){
							 		echo "<tr>
							 			<td> $i </td>";
									    foreach ($abc as $valor){
									    	echo "<td></td>";
								}
							echo "</tr>";
						}
					?>					
				</table>				
			</div>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>