<?php

$name = $_POST['name'];
$to = $_POST['email'];
$message = $_POST['message'];

if (!$name || !$to || !$message):
    echo "<div class=\"alert alert-danger\">Datos requeridos incompletos.</div>";
    exit;
endif;

if(!filter_var($to, FILTER_VALIDATE_EMAIL)):
    echo "<div class=\"alert alert-danger\">Formato de email invalido. (Ej: nombredecuenta@dominio.com)</div>";
    exit;
endif;

$headers = "";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: PAR-ELEC SRL <webmaster@parelec.com.ar>" . "\r\n";
/*$headers .= "Cc: {$name} <{$to}>, PAR-ELEC SRL - Contacto <contacto@parelec.com.ar>, Tito <robertobus@gmail.com>" . "\r\n";*/
/*$headers .= "Bcc: rjbsolutions <robertobus@gmail.com>" . "\r\n";*/
$headers .= "Reply-To: {$to}" . "\r\n";
$headers .= "Return-path: PAR-ELEC SRL - Contacto <contacto@parelec.com.ar>" . "\r\n";
$headers .= 'X-Mailer: PHP v' . phpversion();

$subject = "PAR-ELEC SRL - Contacto Web";

$content = "<html>";
$content .= "<head><title>PAR-ELEC SRL - Contacto Web</title></head>";
$content .= "<body>";
$content .= "<p><b>Nombre:</b> {$name}</p> <br>";
$content .= "<p><b>Email:</b> {$to}</p> <br>";
$content .= "<p><b>Mensaje:</b><br> {$message}</p>";
$content .= "</body>";
$content .= "</html>";

if (mail('contacto@parelec.com.ar', $subject, $content, $headers)):
    echo "<div class=\"alert alert-success\">Gracias por contactar con nososotos, en breve nos estaremos comunicando con ud.</div>";
    exit;
else:
    echo "<div class=\"alert alert-danger\">Error al enviar intentar enviar la información, por favor intentete mas tarde.</div>";
    exit;
endif;