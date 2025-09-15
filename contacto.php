<?php
// contacto.php
date_default_timezone_set("America/Guayaquil"); // Hora local Ecuador
$hora = date("H");

if($hora >= 5 && $hora < 12){
    $saludo = "Buenos días";
} elseif($hora >= 12 && $hora < 18){
    $saludo = "Buenas tardes";
} else {
    $saludo = "Buenas noches";
}

$whatsapp_number = "593987140195"; // número de Ecuador sin 0 inicial
$mensaje = urlencode("$saludo, quiero solicitar más información sobre sus servicios.");
$whatsapp_link = "https://wa.me/$whatsapp_number?text=$mensaje";

// Redirige automáticamente a WhatsApp
header("Location: $whatsapp_link");
exit;
?>
