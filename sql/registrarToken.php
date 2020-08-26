<?php

include("conect.php");
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

$token = $_POST['Token'];
date_default_timezone_set("America/Bogota"); 
$timestamp = date("y-m-d H:i:s");
        
        $query = "INSERT INTO users (clave,ultimo_a) VALUES ( '$token','$timestamp') "
        ."ON DUPLICATE KEY UPDATE ultimo_a = '$timestamp'";
        
if (mysqli_query($conn, $query)) {
     
} else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
        
    
    
?>
