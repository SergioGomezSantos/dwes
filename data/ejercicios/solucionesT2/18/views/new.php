<?php

session_start();

if (!isset($_SESSION['userName'])) {
    header('Location: 18.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['send']) && !empty($_POST['send'])) {

        if (isset($_POST['newWish']) && !empty($_POST['newWish'])) {

            $this->addWish($_POST['newWish'], $_SESSION['userName']);
            header('Location: 18.php?option=menu');

        } else {
            $error = "Falta el Deseo";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>

    <?php
    include('header.php');
    ?>

    <br>

    <div>
    <form name="newForm" method="POST" action="">
        <label for="newWish">Nuevo Deseo: </label>
        <input type="text" name="newWish" id="newWish" />
        <button type="submit" id="send" name="send" value="send">Añadir</button>
    </form>

    <?= "<br>" . $error ?>

    </div>

</body>

</html>