<?php

include("db.php");

if(isset($_POST['actualizar'])){
$nombre = $POST['nombre'];
$telefono = $POST['telefono'];
$direccion = $POST['direccion'];
$fecha = $POST['start'];
$pdf = $FILE['pdf'];
echo "$pdf";


$sql = "UPDATE usuarios SET nombre='$nombre',telefono='$telefono',direccion='$direccion',fecha='$fecha',pdf='$pdf'";
$result = mysqli_query($conexion,$sql);
if ($result) {
  echo "Datos Actualizados";
} else {
  echo "No se pudo Actualizar";
}


};

mysqli_close($conexion);





 ?>
