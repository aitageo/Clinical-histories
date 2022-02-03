<?php
//por aitageo

echo "<!DOCTYPE html>";
echo "<html lang='en'>";

echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Historias Clinicas</title>";

    echo "<link rel='stylesheet' href='estilos.css'>";
    echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";
    echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>";
    echo "</head>";

    echo "<body style='background-color:'black';'>";


include("db.php");
if(isset($_POST['buscar'])){
$nombre = $_POST['nombre'];


$query = "SELECT * FROM usuarios WHERE nombre='$nombre'";
$result = mysqli_query($conexion,$query);
while ($fila = mysqli_fetch_array($result)) {
  echo "<div class='encabezado'>";
  echo "<h2>Historias Clinicas</h2>";
  echo "<h3>Resultados de la busqueda</h3>";
    echo "</div>";
  echo "<form action='actualizar.php' method='post'>";
  echo "<input type='text' style='font-size:20px ;color:white'; name='nombre' value='" . $fila['nombre'] ."'><br>";
  echo "<input type='text' style='font-size:20px ;color:white'; name='telefono' value='" . $fila['telefono'] ."'><br>";
  echo "<input type='text' style='font-size:20px ;color:white'; name='direccion' value='" . $fila['direccion'] ."'><br>";
  echo "<input type='text' style='font-size:20px ;color:white'; name='fecha' value='" . $fila['fecha'] ."'><br>";
  echo "<input type='text' style='font-size:20px ;color:white'; name='pdf' value='" . $fila['pdf'] ."'><br>";
  echo "</form>";


}
if ($fila != "") {
  echo "Busqueda exitosa";
} else {
  echo "No se encontro nada";
  header("location:usuarios.html");
}


};
mysqli_close($conexion);

echo "</body>";
echo "</html>";


?>
