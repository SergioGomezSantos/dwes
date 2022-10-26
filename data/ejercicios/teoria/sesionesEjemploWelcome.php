<?php

include 'footer.php';
session_start();

const USER1 = 'usuario';
CONST USER2 = 'admin';

if (isset($_SESSION['rol'])) {

    $userType = "";
    switch ($_SESSION['rol']) {

        case 0:
            $userType = USER1;
            break;

        case 1:
            $userType = USER2;
            break;

        default:
            header('Location: sesionesEjemplo.php');
            exit();
            break;
    }

    echo "Welcome, " . $userType . ".";
    echo "<br>" . "<a href='sesionesEjemploLogout.php'>Logout</a>" . "<br>";

} else {
    header('Location: sesionesEjemplo.php');
    exit();
}


footerVolver("sesionesEjemplo.php", "Formulario");