<?php
include("conect.php");
$numero = $_POST["numero"];
$numero = mysqli_real_escape_string($conn,$numero);
$query = " SELECT * FROM tb_version ";
$datos = Array();
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_object($result)){
	$datos[] = $row;
}

echo json_encode($datos);
mysqli_close($conn);

?>
