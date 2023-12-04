
<html lang="es">
	<head>
	<link rel="stylesheet" href="css/altaBajaModificacion.css">
	</head>
</html>


<?php 

include 'index.php';

$nam = $_POST['PubName'];
$pre = $_POST['Precio'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

// salida de informacion

echo "<h3 class='subtitulo'>Datos que quieres Ingresar</h3>";
echo "<h3 class='dato'>".$nam."</h3>"."<h3 class='dato'>".$pre."</h3>";

if($foto != "none")
{
	$fp = fopen($foto,"rb");
	$contenido = fread($fp,$fotoTamanio);
	$contenido = addslashes($contenido);
	fclose($fp);

	$base = "subir";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "INSERT INTO persona(PubName,Precio,fotoProducto) VALUES ('$nam','$pre','$contenido')";

$resultado = mysqli_query($Conexion,$cadena);

$SImensaje = "Se inserto la informacion correctamente";

$NOmensaje = "No se inserto la informacion";

if($resultado){
	echo "<p class='dato'> se ha insertado un registro </p>"."<br>";


}else{
	echo "<p class='dato'> No se ha generado un registro</p>"."<br>";
}

}
else
print "<p class='dato'>No se puede subir el archivo</p>";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<script>
		console.log("se ingreso informacion correctamente");

	</script>
	
</body>
</html>