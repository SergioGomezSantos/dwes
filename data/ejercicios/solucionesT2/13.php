<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulario Nombre Valor</title>
</head>

<body>

    <!-- Creación del Formulario -->

    <form name="formulario" method="POST" action="">
        <p>
            <label for="name">Nombre: </label>

            <?php

            // Si el parámetro name del formulario por POST tiene menos de 3 carácteres, muestra el input de name con los datos recibidos
            // Si tiene más de 3 carácters, lo muestra vacío

            if (strlen($_POST['name']) < 3) {
                echo '<input type="text" name="name" id="name" value="' . $_POST['name'] . '"/>';
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

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['send']) && !empty($_POST['send'])) {

            if (strlen($_POST['name']) >= 3) {

                echo "<br><hr><br> Datos Recibidos.<br><br>";
                echo "Saludos, " . $_POST['name'] . "<br>";
            } else {;

                echo "<p style=color:red>El campo es obligatorio y ha de tener minimo 3 caracteres</p>";
            }
        } else {

            echo "No viene de formulario";
        }
    }
    ?>

</body>

</html>