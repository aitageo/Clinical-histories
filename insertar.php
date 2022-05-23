<?php

echo "<script  src='onlyPdf.js' type='text/javascript'></script>";
include("db.php");
if(isset($_POST['nuevo'])){
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fecha = $_POST['start'];
$pdf = $_POST['pdf'];


$query = "INSERT INTO usuarios values('$nombre','$telefono','$direccion','$fecha','$pdf')";
$result = $conexion->prepare($query);
$result->execute();
echo "Datos guardados";
header('location:usuarios.php');
mysqli_close($conexion);
}
 ?>
