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
    header("location:usuarios.php");
    ?>
    <?php
  } else {
    ?>
    <?php
    include("index.php");
    ?>
    <script type="text/javascript">

    </script>
    <?php
  }
?>
<script type="text/javascript">
alert("ingreso exitoso");

</script>
