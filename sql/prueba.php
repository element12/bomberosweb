<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "prueba@bomberosmadridb31.com";
    $to = "607-JKguv8w8WHh6zaNX@esalert.active911.com";
    $subject = "Prueba";
    $message = "LLAMADA: ALERTA DE PRUEBA VIA CORREO
    LUGAR: CONJUNTO RESIDENCIAL BOREAL
    ADDR: Cl. 6 Sur ## 24-127, Madrid, Cundinamarca
    ID: 001
    MAPA: https://www.google.com/maps/place/Conjunto+Residencial+Boreal/@4.7329996,-74.2841813,20.29z/data=!4m5!3m4!1s0x8e3f79da7a9d91e3:0xa1c55d6a64ecb0e5!8m2!3d4.7327344!4d-74.2844667
    RIESGO: MODERADO
    GRUPO: Pruebas";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>