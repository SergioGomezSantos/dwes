<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulario Nombre</title>
</head>

<body>
    <form name="formulario" method="POST" action="">
        <p>
            <label for="name">Nombre: </label>
            <input type="text" name="name" id="name" />
        </p>
        <button type="submit" name="send" id="send" value="send">Enviar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['send']) && !empty($_POST['send'])) {

            if (!empty($_POST['name'])) {

                echo "<br><hr><br> Datos Recibidos.<br><br>";
                echo "Saludos, " . $_POST['name'] . "<br>";
            } else {

                echo "<p style=color:red>El campo es obligatorio</p>";
            }
        } else {

            echo "No viene de formulario";
        }
    }
    ?>

</body>

</html>