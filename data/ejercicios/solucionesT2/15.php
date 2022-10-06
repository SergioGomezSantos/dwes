<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nombres[]</title>
</head>

<body>
    <form name="formulario" method="POST" action="">
        <p>
            <label for="name1">Nombre 1: </label>
            <input type="text" name="names[]" id="name1" />
        </p>

        <p>
            <label for="name2">Nombre 2: </label>
            <input type="text" name="names[]" id="name2" />
        </p>

        <p>
            <label for="name1">Nombre 3: </label>
            <input type="text" name="names[]" id="name3" />
        </p>

        <button type="submit" name="send" id="send" value="send">Enviar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['send']) && !empty($_POST['send'])) {

            echo "<br><hr><br> Datos Recibidos.<br><br>";
            echo "Nombres: ";

            if (!empty($_POST['names'])) {

                foreach ($_POST['names'] as $name) {

                    if (empty($name)) {
                        echo "- ";
                    }

                    echo $name . " ";
                }
                echo "<br>";
            } else {
                echo "Sin array de nombres" . "<br>";
            }
        } else {

            echo "No viene de formulario";
        }
    }
    ?>

</body>

</html>