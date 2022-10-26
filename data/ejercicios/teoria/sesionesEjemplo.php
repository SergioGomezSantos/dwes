<?php

session_start();
include 'footer.php';

const USER1 = 'usuario';
CONST USER2 = 'admin';

const PASSWD1 = '1234';
CONST PASSWD2 = '4567';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['send']) && !empty($_POST['send'])) {

        if (isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['passwd']) && !empty($_POST['passwd'])) {

            checkCredentials();

        } else {

            echo "Faltan Credenciales";
        }
    }
}   

function checkCredentials() {

    if ($_POST['user'] === USER1 && $_POST['passwd'] === PASSWD1) {

        $_SESSION['rol'] = 0;
        header('Location: sesionesEjemploWelcome.php');
        exit();

    } elseif ($_POST['user'] === USER2 && $_POST['passwd'] === PASSWD2) {

        $_SESSION['rol'] = 1;
        header('Location: sesionesEjemploWelcome.php');
        exit();

    } else {
        echo "Credenciales Incorrectos";
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <form name="form" action="" method="POST">

        <label for="user">Usuario: </label>
        <input type="text" name="user" id="user" />

        <br>

        <label for="passwd">Contraseña: </label>
        <input type="password" name="passwd" id="passwd" />

        <br>

        <button type="submit" name="send" id="send" value="send">Enviar</button>
    </form>

    <?php 
        footerVolver("sesiones.php", "Sesiones");
    ?>

</body>

</html>




<!-- Crear entorno de login
 - Página de login: usuario + password
 - usuario === usuario && password === 1234 -> ok, rol = 0;
 - usuario === admin && password === 4567 -> ok, rol = 1;

 - not ok -> login error;
 - login ok -> welcome user, link logout.php

logout -> cerrar sesion, redirect login -->