<?php
include("db.php");

if(isset($_POST['eliminar'])){
$nombre = $_POST['nombre'];


$query = "DELETE FROM usuarios WHERE nombre='$nombre'";
$result = mysqli_query($conexion,$query);

header('location:usuarios.html');
mysqli_close($conexion);

if($result){
  echo '<script> alert("Borrado exitoso");</script>';
}else {
    echo '<script> alert("No se pudo borrar");</script>';
}

};

 ?>
