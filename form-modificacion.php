<?php
include 'index.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Modificacion</title>
	<link rel="stylesheet" href="css/formAltas.css">
</head>
<body>

<div class="container">
	<h3 class="altaTitulo">FORMULARIO DE MODIFICACION</h3>
	<form class="altaInput" action="modificacion.php" method="POST" enctype="multipart/form-data">
	<div class="grupoInputs">
		<label for="PubName">Campo Clave PubName:</label>
		<input type="text" name="id" required><br>	
    </div>

		<br><br>
		Campos a modificar:<br>

		<div class="grupoInputs">
		<label for="nam">Nombre:</label>
		<input type="text" name="nam" require><br>
	    </div>

		<div class="grupoInputs">
		<label for="pre">precio:</label>
		<input type="number" name="pre" require><br>
	    </div>

		<div class="grupoInputs">
		<label for="foto">Archivo</label>
		<input type="file" name="foto" require><br>
	    </div>

		<div class="btn-submit">
		<input type="submit" value="Modificar"><br>
	    </div>

		
	</form>
</div>
	
</body>
</html>