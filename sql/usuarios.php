<?php
$servername = "localhost";
$database = "u221938651_App_prevencion";
$username = "u221938651_Jeisson";
$password = "124536789Aa";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
date_default_timezone_set("America/Bogota"); 
$di = $_POST['di'];
$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$tipo = $_POST['tipo'];
$timestamp = date("y-m-d H:i:s");

if($tipo == "1"){
$sql = "INSERT INTO usuarios (di, nombre,ultimo_a, ultima_a) VALUES ('$di','$nombre','$timestamp','{$codigo}')"." ON DUPLICATE KEY UPDATE ultimo_a = '$timestamp'";

}else if($tipo == "2"){
 $sql = "INSERT INTO usuarios (di, nombre,ultimo_a, ultima_a) VALUES ('$di','$nombre','$timestamp','{$codigo}')"." ON DUPLICATE KEY UPDATE ultima_a = '$codigo'";   
}
  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);

?>