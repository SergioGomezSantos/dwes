<?php

include 'footer.php';

if ($_COOKIE['cookieEjemplo']) {

    $decoded = json_decode($_COOKIE['cookieEjemplo'], true);

    switch ($decoded['languaje']) {

        case "spanish":

            echo "Saludos, has elegido Español" . "<br>";
            echo $decoded['brand'] ? "Has elegido la marca: " . $decoded['brand'] : "No has elegido marca";


            break;

        case "english":

            echo "Greatings, you have chosen English" . "<br>";
            echo $decoded['brand'] ? "You have chosen the brand: " . $decoded['brand'] : "You have not chosen the brand";

            break;

        case "deutch":

            echo "Guten Tag, Sie haben Deutsch gewählt" . "<br>";
            echo $decoded['brand'] ? "Sie haben die marke gewählt: " . $decoded['brand'] : "Sie haben die marke nicht gewählt";

            break;

        default:
            break;
    }
} else {

    setcookie('cookieEjemplo', '', time() - 60);
    header("Location: cookiesEjemplo.php");
    exit();
}

echo "<br>";
footerVolver("cookiesEjemplo.php", "Formulario");
