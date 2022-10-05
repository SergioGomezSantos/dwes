<?php

require 'footer.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['send']) && !empty($_POST['send'])) {

        if (!empty($_POST['name']) && strlen($_POST['name']) >= 3) {

            echo "Saludos, " . $_POST['name'] . "<br>";
        } else {
;
            $_SESSION['prevName'] = $_POST['name'];
            $_SESSION['emptyName'] = 'El campo es obligatorio y ha de tener minimo 3 caracteres';
            header('Location: ' . '13.php');
        }
    } else {

        echo "No viene de formulario";
    }

    footer('13.php');
}
