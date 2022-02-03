<?php
include_once 'db.php';

  $email= $_POST['email'];
  $password = $_POST['password'];
  session_start();

  $query= "SELECT *FROM medicos where email='$email' and password='$password'";
  $result=$conexion->prepare($query);
  $result->execute();
  $filas=$result->rowCount();
  if($filas) {
    header("location:usuarios.html");
    echo '<script text="text/javascript">alert("Ingreso Exitoso")</script>';
    ?>
    <?php
  } else {
    ?>
    <?php
    include("index.php");
    echo '<script text="text/javascript">alert("error de validacion")</script>';
    ?>

    <?php
  }

  mysqli_free_result($result);
  mysqli_close($conexion);


?>
