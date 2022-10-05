<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulario Nombre</title>
</head>

<body>
    <form name="formulario" method="POST" action="13_read.php">
        <p>
            <label for="name">Nombre: </label>

            <?php  
                if (!empty($_SESSION['prevName'])) {
                    echo '<input type="text" name="name" id="name" value="' . $_SESSION['prevName'] . '"/>';
                } else {
                    echo '<input type="text" name="name" id="name"/>';
                }
            ?>

            

            <?php
            if (!empty($_SESSION['emptyName'])) {
                echo "<p style=color:red>" . $_SESSION['emptyName'] . "</p>";
                unset($_SESSION['emptyName']);
            }
            ?>

        </p>
        <button type="submit" name="send" id="send" value="send">Enviar</button>
    </form>
</body>

</html>