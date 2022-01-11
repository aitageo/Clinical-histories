<?php
include_once 'db.php';

  $email= $_POST['email'];
  $password = $_POST['password'];
  session_start();

  $query= "SELECT *FROM medicos where email='$email' and password='$password'";
  $result= mysqli_query($conexion,$query);
  $filas= mysqli_num_rows($result);
  if($filas) {
    header("location:usuarios.html");
      echo '<script text="text/javascript">console.log("Ingreso Exitoso")</script>';
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
