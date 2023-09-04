
<html lang="es">
	<head>
	<link rel="stylesheet" href="css/altaBajaModificacion.css">
	</head>
</html>


<?php 

include 'menu.php';

$nam = $_POST['PubName'];
$pre = $_POST['Precio'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

// salida de informacion

echo "<h3>".$nam."</h3>"."<h3>".$pre."</h3>";

if($foto != "none")
{
	$fp = fopen($foto,"rb");
	$contenido = fread($fp,$fotoTamanio);
	$contenido = addslashes($contenido);
	fclose($fp);

	$base = "subir";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "INSERT INTO publicaciones(PubName,Precio,fotoProducto) VALUES ('$nam','$pre','$contenido')";

$resultado = mysqli_query($Conexion,$cadena);

$SImensaje = "Se inserto la informacion correctamente";

$NOmensaje = "No se inserto la informacion";

if($resultado){
	print "se ha insertado un registro"."<br>";


}else{
	print "NO se ha generado un registro"."<br>";
}

}
else
print "No se puede subir el archivo";

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