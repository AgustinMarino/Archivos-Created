<?php
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Altas</title>
	<link rel="stylesheet" href="css/formAltas.css">
</head>
<body>

<div class="container">
    <h3 class="altaTitulo">FORMULARIO DE ALTA - (PUBLICACION DE PRODUCTOS EN CREAT3D)</h3>
	<form class="altaInput" action="altas.php" method="POST" enctype="multipart/form-data">
		<div class="grupoInputs">
		<label for="PubName">PubName:</label>
		<input type="text" name="PubName"><br>
		</div>

		<div class="grupoInputs">
		<label for="Precio">Precio</label>
		<input type="number" name="Precio"><br>
	    </div>

		<div class="grupoInputs">
		<label for="foto">Archivo</label>
		<input type="file" name="foto"><br>
	    </div>

		<div class="btn-submit">
		<input type="submit" value="Grabar"><br>
	    </div>
	</form>
</div>
	
	
</body>
</html>