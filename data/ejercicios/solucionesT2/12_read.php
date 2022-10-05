<?php

require 'footer.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['send']) && !empty($_POST['send'])) {

        if (!empty($_POST['name'])) {

            echo "Saludos, " . $_POST['name'] . "<br>";
        } else {

            $_SESSION['emptyName'] = 'El campo es obligatorio';
            header('Location: ' . '12.php');
        }
    } else {

        echo "No viene de formulario";
    }

    footer('12.php');
}
