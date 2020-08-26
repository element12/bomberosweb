<?php
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
date_default_timezone_set("America/Bogota"); 
$id = $_POST['id'];
$codigo = $_POST['codigo'];
$tipo = $_POST['tipo'];

if($tipo == "0"){
$sql = "update tb_solicitud set estado = '$codigo' where id = '$id'";
}else{
 $sql = "update tb_solicitud set situacion = '$codigo' where id = '$id'"; 
}
  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo  mysqli_error($conn);
  }
mysqli_close($conn);

?>