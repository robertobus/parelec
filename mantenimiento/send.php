<?php

$to = $_POST['email'];

if(!filter_var($to, FILTER_VALIDATE_EMAIL)):
    echo "Formato de email invalido. (Ej: nombredecuenta@dominio.com)";
    exit;
endif;

$headers = "";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: PAR-ELEC SRL <webmaster@parelec.com.ar>" . "\r\n";
/*$headers .= "Cc: {$name} <{$to}>, PAR-ELEC SRL - Contacto <contacto@parelec.com.ar>, Tito <robertobus@gmail.com>" . "\r\n";*/
$headers .= "Bcc: rjbsolutions <robertobus@gmail.com>" . "\r\n";
$headers .= "Reply-To: {$to}" . "\r\n";
$headers .= "Return-path: PAR-ELEC SRL - Contacto <contacto@parelec.com.ar>" . "\r\n";
$headers .= 'X-Mailer: PHP v' . phpversion();

$subject = "PAR-ELEC SRL - Contacto Web";

$content = "<html>";
$content .= "<head><title>PAR-ELEC SRL - Contacto Web</title></head>";
$content .= "<body>";
$content .= "<p><b>email:</b> {$to}</p> <br>";
$content .= "</body>";
$content .= "</html>";

if (mail('contacto@parelec.com.ar', $subject, $content, $headers)):
    echo "Gracias por contactar con nososotos. ";
    exit;
else:
    echo "Error al enviar intentar enviar la información, por favor intentete mas tarde.";
    exit;
endif;