<?php
/*
	Clase que conecta a base de datos "supervisión_personal" únicamente con fines de
	validar los datos de acceso de los usuarios.
	
	Ver 0.2                        24.09.2011
	
	NutricionSAS Derechos reservados 
*/


$servername = "localhost";
$database = "u221938651_App_prevencion";
$username = "u221938651_Jeisson";
$password = "124536789";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
?>