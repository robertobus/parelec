<?php

$addressee = $_POST['email'];

$headers = "From: PAR-ELEC SRL <webmaster@parelec.com.ar> \r\n";
$headers .= "Reply-To: contacto@parelec.com.ar \r\n";
$headers .= "Return-path: return@parelec.com.ar";

$subject = "Contacto Web";

$content = "email: {$addressee}";

if (mail($addressee, $subject, $content, $headers))
    echo "Gracias";
else
    echo "Error";