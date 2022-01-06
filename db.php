<?php

$database="historias_clinicas";
$user ='root';
$password = '';

$conexion =  new PDO('mysql:host=localhost;dbname='.$database,$user,$password);
echo "<h1 style='color:blue';> conexion exitosa</h1>";

?>
