
<html lang="es">
</html>


<?php 

include 'index.php';

$id = $_POST['id'];
$nam = $_POST['nam'];
$pre = $_POST['pre'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

$base = "Subir";
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo "<p class='dato'> la conexion fue exitosa </p>";

}else{
	echo "<p class='dato'> la conexion ha fallado </p>";
}

if($foto != "none")
{
	$fp = fopen($foto,"rb");
	$contenido = fread($fp,$fotoTamanio);
	$contenido = addslashes($contenido);
	fclose($fp);

$cadena = "UPDATE  persona SET PubName = '$nam', Precio = '$pre' , fotoProducto = '$contenido' WHERE ProductID = '$id' ";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "<p class='dato'> se ha modificado un registro </p>";

}else{
	echo "<p class='dato'> NO se ha modificado un registro </p>";
	echo mysqli_error($Conexion);
}
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="form-modificacion.php" name = "volver">Volver</a>
	
</body>
</html>