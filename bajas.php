<html lang="es">
</html>


<?php 

include 'index.php';


$nam = $_POST['PubName'];

$base = "Subir";
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo "<h3 class='dato'>la conexion fue exitosa</h3>";

}else{
	echo "<h3 class='dato'>la conexion ha fallado</h3>";
}

$cadena= "DELETE FROM persona  WHERE PubName = '$nam'";  

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "<h3 class='dato'>se ha eliminado un registro</h3>"."<br>";

}else{
	echo "<h3 class='dato'>NO se ha eliminado un registro</h3>"."<br>";
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
	<a href="form-bajas.php">Volver</a>
	
</body>
</html>