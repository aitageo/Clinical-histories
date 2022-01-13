<?php

include("db.php");
if(isset($_POST['nuevo'])){
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fecha = $_POST['start'];
$pdf = $_POST['pdf'];


$query = "INSERT INTO usuarios values('$nombre','$telefono','$direccion','$fecha','$pdf')";
$result = mysqli_query($conexion,$query);
header('location:usuarios.html');
mysqli_close($conexion);
}
 ?>
