<?php
    $Tipo = $_POST["Tipo"];
    $Clase = $_POST["Clase"];
    $Barrio = $_POST["Barrio"];
    $Direccion = $_POST["Direccion"];
    $Descripcion = $_POST["Descripcion"];
    $Sitio_lac = $_POST["Sitio_lac"];
    $Sitio_log = $_POST["Sitio_log"];
    $Sitio_dir = $_POST["Sitio_dir"];
    $Gps_lac = $_POST["Gps_lac"];
    $Gps_log = $_POST["Gps_log"];
    $Unidad = $_POST["Unidad"];

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "prueba@bomberosmadridb31.com";
    $to = "jeisonortiz0016@gmail.com";
    $subject = "$Tipo $Clase";
    $message = "LLAMADA: $Tipo $Clase
    LUGAR: $Sitio_lac,$Sitio_log
    ADDR: $Sitio_dir
    NOTA: $Barrio,$Direccion,$Descripcion
    RIESGO: MODERADO
    GRUPO: Pruebas";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>