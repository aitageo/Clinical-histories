<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplicacion Historias Clinicas</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="estilos.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <div class="formulario">
        <h2>Aplicacion historias Clinicas</h2>
        <h2>Login</h2>
      <div>
    <form action="db.php" method="POST" autocomplete="on">
      <input type="email" id="email" name="email" placeholder="correo" required class="correo">
      <input type="password" id="contraseña" name="password" placeholder="contraseña" required class="contraseña">

    </form>
    <input type="submit" value="enviar" id="enviar" name="enviar">
  </div>
    <!--<input type="submit" name="entrar" value="entrar" >-->
    <script src="index.js" type="text/javascript"></script>

      <?php
      include_once 'db.php';

      if(isset($_POST['enviar'])){

        $email= $_POST['email'];
        $password = $_POST['password'];

        $query = $conexion->prepare("SELECT * FROM medicos where email='$email' and password='$password'");
        $result = mysqli_query($conexion,$query);
        echo "result" . result;
        $filas= mysqli_num_rows($result);
        if ($filas) {
          header("location:usuarios.html");
        } else {
          include("./index.php");
          echo "<h1 style='color:red'>Error de validacion</h1>";
        }

        mysqli_free_result($result);
        mysqli_close($conexion);




      };

      ?>
  </div>


</body>


</html>
