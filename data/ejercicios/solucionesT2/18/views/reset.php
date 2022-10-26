<?php

session_start();

if (!isset($_SESSION['userName'])) {
    header('Location: 18.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['send']) && !empty($_POST['send'])) {

        $this->resetList($_SESSION['userName']);
        header('Location: 18.php?option=menu');
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

        <form name="deleteForm" method="POST" action="">
            <label for="send">¿Seguro?</label>
            <button type="submit" id="send" name="send" value="send">Vaciar</button>

        </form>



    </div>

</body>

</html>