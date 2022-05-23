<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Historias Clinicas</title>

    <link rel='stylesheet' href='estilos.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
  </head>
<body>

<?php
include("db.php");
if(isset($_POST['buscar'])){
$nombre = $_POST['nombre'];

$registro = $conexion->query("SELECT * FROM usuarios WHERE nombre='$nombre'")->fetchAll(PDO::FETCH_OBJ); ?>

<?php foreach ($registro as $key): ?>

<div class='encabezado'>
  <h2>Historias Clinicas</h2>
  <h3>Resultados de la busqueda</h3>
  </div>
  <form action='actualizar.php' method='post'>
  <input type='text'  name='nombre' value='<?php echo  $key->nombre?>'><br>
  <input type='text'  name='telefono' value='<?php echo  $key->telefono?>'><br>
  <input type='text'  name='direccion'value='<?php echo  $key->direccion?>'><br>
  <input type='text' name='fecha' value='<?php echo  $key->fecha?>'><br>
  <input type='text' name='pdf' value='<?php echo  $key->pdf?>'><br>
  </form>

<?php endforeach; ?>

<?php
};
?>
</body>
</html>
