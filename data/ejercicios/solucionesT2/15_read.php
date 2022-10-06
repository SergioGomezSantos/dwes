<?php

require 'footer.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['send']) && !empty($_POST['send'])) {

        echo "Nombres: ";
        if (!empty($_POST['names'])) {

            foreach ($_POST['names'] as $name) {

                if (empty($name)) {
                    echo "- ";
                }

                echo $name . " ";
            }
            echo "<br>";
        } else {
            echo "Sin nombres" . "<br>";
        }
    } else {
        header('Location: ' . '14.php');
    }
} else {

    echo "No viene de formulario";
}

footer('15.php');
