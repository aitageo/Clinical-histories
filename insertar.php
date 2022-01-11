<?php

include("db.php");
if(isset($_POST['nuevo'])){
$nombre = if(isset($_POST['nombre']));
$telefono = if(isset($_POST['telefono']));
$direccion = if(isset($_POST['direccion']));
$fecha = if(isset($_POST['start']));
$pdf = if(isset($_FILES['pdf']));

$query = "INSERT INTO usuarios(nombre,telefono,direccion,fecha_atencion,pdf) values('$nombre,$telefono,$direccion,$fecha,$pdf')"
$result = mysqli_query($conexion,$query);
header('location:usuarios.html');

}
 ?>
