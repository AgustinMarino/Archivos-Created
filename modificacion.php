
<html lang="es">
</html>


<?php 

include 'menu.php';


$ape = $_POST['PubName'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];

$base = "Subir";
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo "la conexion fue exitosa "."<br>";

}else{
	echo "la conexion ha fallado "."<br>";
}

$cadena = "UPDATE  persona SET PubName = '$nam', Precio = '$pre' WHERE ";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "se ha modificado un registro"."<br>";

}else{
	echo "NO se ha modificado un registro"."<br>";
	echo mysqli_error($Conexion);
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
	<a href="form-modificacion.php">Volver</a>
	
</body>
</html>