
<html lang="es">
	<head>
	<link rel="stylesheet" href="css/altaBajaModificacion.css">
	</head>
</html>


<?php 

include 'menu.php';

$nam = $_POST['PubName'];
$nom = $_POST['nombre'];
$ed = $_POST['Precio'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

// salida de informacion

echo "<h3>".$nam."</h3>". "<h3>".$nom."</h3>". "<h3>".$ed."</h3>";

if($foto != "none")
{
	$fp = fopen($foto,"rb");
	$contenido = fread($fp,$fotoTamanio);
	$contenido = addslashes($contenido);
	fclose($fp);

	$base = "Subir";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "INSERT INTO persona(PubName, nombre, Precio,fotoProducto) VALUES ('$nam','$nom','$ed','$contenido')";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	print "se ha insertado un registro"."<br>";

}else{
	print "NO se ha generado un registro"."<br>";
}

}
else
print "No se puede subir el archivo";

 ?>
