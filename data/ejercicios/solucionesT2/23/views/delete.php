<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['send']) && !empty($_POST['send'])) {

        if (isset($_POST['removeWish']) && !empty($_POST['removeWish'])) {

            $this->removeWish($_POST['removeWish']);
            header('Location: 23.php');
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

        <form name="deleteForm" method="POST" action="">
            <label>Deseo a Borrar: </label>
            <select id="removeWish" name="removeWish">
                <?php
                $this->deleteList();
                ?>
            </select>
            <button type="submit" id="send" name="send" value="send">Borrar</button>

        </form>



    </div>

</body>

</html>