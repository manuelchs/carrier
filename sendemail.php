<?php 

$postData = $_POST;
if( isset($_POST['email']) ) {
    $email = $_POST['email'];
}
else{
    $email ="";
}
if( isset($_POST['nombre']) ) {
    $name = $_POST['nombre'];
}
else{
    $name ="";
}
if( isset($_POST['telefono']) ) {
    $phone = $_POST['telefono'];
}
else{
    $phone ="";
}
if( isset($_POST['asunto']) ) {
    $asunto = $_POST['asunto'];
}
else{
    $asunto ="";
}
if( isset($_POST['mensaje']) ) {
    $mensaje = $_POST['mensaje'];
}
else{
    $mensaje ="";
}


$statusMsg ="";

if(trim($asunto) == "" || trim($name) == "" || trim($phone) == "" || trim($mensaje)=="" || trim($email)=="")
{
    $arr = array("success" => false, "message" => $statusMsg);
    echo json_encode($arr);
    return;
}

                
// Recipient

$toEmail = 'reto@carrierguadalajara.com.mx';

if ( $asunto == "Refacciones" ) {
    $toEmail = 'erikaruiz@carrierguadalajara.com.mx';
}
if ( $asunto == "Equipos" ) {
    $toEmail = 'hectormercado@carrierguadalajara.com.mx';
}
if ( $asunto == "Servicio" ) {
    $toEmail = 'alejandroalvarez@carrierguadalajara.com.mx';
}
if ( $asunto == "Otro" ) {
    $toEmail = 'reto@carrierguadalajara.com.mx';
}

// Sender
$from = $email;
$fromName = $name;

// Subject
$emailSubject = $name.' ha envíado un mensaje desde el sitio web.';

// Message 
$htmlContent = '<h2>Informacion de contacto</h2>
    <p><b>Nombre:</b> '.$name.'</p>
    <p><b>E-mail:</b> '.$email.'</p>
    <p><b>Telefono:</b> '.$phone.'</p>
    <p><b>Asunto:</b> '.$asunto.'</p>
    <p><b>Mensaje:</b> '.$mensaje.'</p>';

// carriage return type (RFC)
$eol = "\r\n"; 

// Header for sender info
$headers = "From: $fromName"." <".$from.">".$eol;

// Set content-type header for sending HTML email
$headers .= "MIME-Version: 1.0".$eol;
$headers .= "Content-type:text/html;charset=UTF-8".$eol;

// Send email
$mail = mail($toEmail, $emailSubject, $htmlContent, $headers); 


// If mail sent
if($mail){
    $statusMsg= 'Sus datos fueron enviados';        
    $arr = array("success" => true, "message" => $statusMsg);

}else{
    $arr = array("success" => false, "message" => $statusMsg);
}
echo json_encode($arr);

?>