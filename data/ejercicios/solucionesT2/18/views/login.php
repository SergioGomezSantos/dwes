<?php

session_start();

if (isset($_SESSION['userName'])) {
    header('Location: 18.php?option=close');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['send']) && !empty($_POST['send'])) {

        if (isset($_POST['userName']) && !empty($_POST['userName'])) {

            $_SESSION['userName'] = $_POST['userName'];
            header('Location: 18.php?option=menu');
            exit();
        } else {

            $error = "Faltan Credenciales";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>App 18</title>
</head>

<body>

    <?php
    include('header.php');
    ?>

    <br>

    <div>
    <form name="form" action="" method="POST">

        <label for="userName">Usuario: </label>
        <input type="text" name="userName" id="userName" />

        <button type="submit" name="send" id="send" value="send">Enviar</button>
    </form>

    <?= $error ?>

    </div>

</body>

</html>