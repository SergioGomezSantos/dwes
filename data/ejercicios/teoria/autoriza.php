<?php

require_once 'footer.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    if (isset($_GET['send']) && !empty($_GET['send'])) {

        echo "Nombre: " . (!empty($_GET['nombre']) ? $_GET['nombre'] : "-") . "<br>";
        echo "Apellido: " . (!empty($_GET['surname']) ? $_GET['surname'] : "-") . "<br>";

        echo "Letras: ";
        if (!empty($_GET['letters'])) {


            foreach ($_GET['letters'] as $letter) {
                echo $letter . " ";
            }
            echo "<br>";

        } else {
            echo "-" . "<br>";
        }
        
        echo "Number: " . (!empty($_GET['number']) ? $_GET['number'] : "-") . "<br>";

        echo "Color: " . $_GET['color'] . "<br>";
        echo "Colores: ";
        foreach ($_GET['colors'] as $colors) {
            echo $colors . " ";
        }
        echo "<br>";

    } else {

        echo "No proviene del formulario";
    }

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['send']) && !empty($_POST['send'])) {

        echo "Nombre: " . (!empty($_POST['nombre']) ? $_POST['nombre'] : "-") . "<br>";
        echo "Contraseña: " . (!empty($_POST['passwd']) ? $_POST['passwd'] : "-") . "<br>";

        echo "Letras: ";
        if (!empty($_POST['letters'])) {


            foreach ($_POST['letters'] as $letter) {
                echo $letter . " ";
            }
            echo "<br>";

        } else {
            echo "-" . "<br>";
        }

        echo "Number: " . (!empty($_POST['number']) ? $_POST['number'] : "-") . "<br>";

        echo "Color: " . $_POST['color']  ."<br>";
        echo "Colores: ";
        foreach ($_POST['colors'] as $colors) {
            echo $colors . " ";
        }
        echo "<br>";
    }
}

echo "<br>";
volverFooter("formulario.php", "Formulario");
