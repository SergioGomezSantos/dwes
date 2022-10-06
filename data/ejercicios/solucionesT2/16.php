<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lista</title>
</head>

<body>
    <form name="formulario" method="POST" action="">
        <p>
            <label for="element">Elemento: </label>
            <input type="text" name="elements[]" id="element" />
        </p>

        <button type="submit" name="send" id="send" value="send">Enviar</button>
    </form>

    <br>
    <hr><br>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['send']) && !empty($_POST['send'])) {

            foreach ($_POST['elements'] as $element) {
                echo $element . "<br>";
            }

        } else {

            echo "No viene de formulario";
        }
    }

    ?>

</body>

</html>