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
$nombre_usuario = $_POST["nombre_usuario"];
$numero_telefono = $_POST["numero_telefono"];
$tipo_emergencia = $_POST["tipo_emergencia"];
$barrio = $_POST["barrio"];
$direccion = $_POST["direccion"];
$descripcion = $_POST["descripcion"];
$situacion = $_POST["situacion"];
$estado = $_POST["estado"];
$longitud = $_POST["longitud"];
$lactitud = $_POST["lactitud"];
$direccion_gps = $_POST["direccion_gps"];
$comentario = "null";
date_default_timezone_set("America/Bogota"); 
$hora_emer = date("y-m-d H:i:s");
// Create connection

$sql = "INSERT INTO tb_solicitud (nombre_usuario, numero_telefono, tipo_emergencia, barrio, direccion, descripcion,situacion,estado,longitud,lactitud,direccion_gps,hora_emer,comentarios) VALUES ('$nombre_usuario','$numero_telefono','$tipo_emergencia','$barrio','$direccion','$descripcion','$situacion','$estado','$longitud','$lactitud','$direccion_gps','$hora_emer','$comentario')";
if (mysqli_query($conn, $sql)) {
    echo mysqli_insert_id($conn);
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

    function sendPushNotification($to = '', $data = array()) {
        
        $apiKey = 'AAAAhBMPPMc:APA91bG2uRjjsCws0fj9ckQtoa31wyuPJmbizZ1ztqQlGY_5QTOUBO6DoGEsUv5Yh2_Fkf2kLhlX1cva_JHMijRWvJ6O3z-kD4Gp-XYLH9hO0jgkX2opxFraq-3IUf4Evtd4qRxCExG2';
        
        $fields = array(
                        'to' => $to,
                        'data' => $data,
                        );
        
        $headers = array('Authorization: key='.$apiKey, 'Content-Type: application/json');
        
        $url = 'https://fcm.googleapis.com/fcm/send';
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        
        
        
        $result = curl_exec($ch);
        
        curl_close($ch);
        
        return json_decode($result, true);
        
      
    }
    
    // DATOS DE  LOS DESTINATARIOS
    //$to = "cOXj3NXmBD8:APA91bEVt28g81V6bPl-NJxW8KiWaySnCBXy3gyGkusRRELoqKhONpsFp8P2tlBq7uPNh0H-zKEo55rKflqb0imDsw99j--u-OkLN1TRSA11AwItdqrPRGrwoCf1VPV7XgFJIveYSHa2";
    $to = "/topics/dispositivos";
    
    // DATOS DE LA NOTIFICACION
    $data = array(
                  'title' => 'Emergencia',
                  'body' => "Salio emergencia en: $direccion Tipo: $tipo_emergencia",
                  );
    
    //sendPushNotification($to,  $data)
    sendPushNotification($to,  $data);


?>