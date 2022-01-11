<?php

include("db.php");
if(isset($_POST['nuevo'])){
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fecha = $_POST['start'];
echo "<h1>$fecha</h1>";
$pdf = $_POST['pdf'];
echo "<h1>$pdf</h1>";

$query = "INSERT INTO usuarios values('$nombre','$telefono','$direccion','$fecha','$pdf')";
$result = mysqli_query($conexion,$query);
header('location:usuarios.html');
mysqli_close($conexion);
}
 ?>
