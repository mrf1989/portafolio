<?php
if ($_POST["nombre"] && $_POST["email"] != "") {
    $remite = $_POST["nombre"];
    $emailRemite = $_POST["email"];
    $destino = "mr@marioruano.com";
    $asunto = $_POST["asunto"];
    $mensaje .= "Enviado por: " . $remite . "\n" . "Email: " . $emailRemite . "\n\n" . "Asunto: " . $asunto . "\n" . $_POST["mensaje"];
    $emailheader = "From: " . $remite . "<" . $emailRemite . ">\r\n";
    mail($destino, $asunto, $mensaje, $emailheader) or die ("Lo siento, su mensaje no ha podido ser enviado.<br />Inténtelo de nuevo, por favor.");
    echo utf8_decode(utf8_decode("Su mensaje ha sido enviado correctamente."));
} else {
    if ($_POST["nombre"] == "" || $_POST["email"] == "" || $_POST["mensaje"] == "") {
        echo utf8_decode("Todos los campos de texto son obligatorios\n" . "<a href='index.html'>Regresar al portafolio</a>");
        exit;
    }
}
?>