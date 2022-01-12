<?php
include("db.php");

if(isset($_POST['eliminar'])){
$nombre = $_POST['nombre'];


$query = "DELETE FROM usuarios WHERE nombre='$nombre'";
$result = mysqli_query($conexion,$query);


if($result){
  echo "Borrado exitoso";
}else {
  echo "No se pudo borrar";
}




};


 ?>
