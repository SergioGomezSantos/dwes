<?php

include 'footer.php';

$languaje = "spanish";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['send']) && !empty($_POST['send'])) {

        if (isset($_POST['languaje']) && !empty($_POST['languaje'])) {
            $languaje = $_POST['languaje'];
        }

        if (isset($_POST['brand']) && !empty($_POST['brand'])) {
            $brand = $_POST['brand'];
        }

        switch ($languaje) {

            case "spanish":

                echo "Saludos, has elegido Español" . "<br>";
                echo $brand ? "Has elegido la marca: " . $brand : "No has elegido marca";

                break;

            case "english":

                echo "Greatings, you have chosen English" . "<br>";
                echo $brand ? "You have chosen the brand: " . $brand : "You have not chosen the brand";

                break;

            case "deutch":

                echo "Guten Tag, Sie haben Deutsch gewählt" . "<br>";
                echo $brand ? "Sie haben die marke gewählt: " . $brand : "Sie haben die marke nicht gewählt";

                break;

            default:
                break;
        }

    } else {

        echo "Error. No viene de formulario";
    }

    echo "<br>";
    footerVolver("cookiesEjemplo.php", "Formulario");
}
