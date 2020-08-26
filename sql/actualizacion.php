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
$tipo_emergencia = $_POST["tipo_emergencia"];
$barrio = $_POST["barrio"];
$direccion = $_POST["direccion"];
$descripcion = $_POST["descripcion"];
$comentario = $_POST["comentarios"];


 $sql = "update tb_solicitud set tipo_emergencia = '$tipo_emergencia', barrio = '$barrio',direccion = '$direccion',comentarios='$comentario',descripcion= '$descripcion' where id = '$id'"; 

  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo  mysqli_error($conn);
  }
mysqli_close($conn);

?>