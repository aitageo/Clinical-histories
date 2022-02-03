<?php
	$database="historias_clinicas";
	$user='root';
	$password='';
  $localhost="localhost";


	try {

	$conexion=new PDO('mysql:host=localhost; dbname=historias_clinicass','root','');

}catch(Exception $e){
	die("error" . $e->getMessage());
	echo "linea del error" .$e->getLine();
}




?>
