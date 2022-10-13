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
            <input type="text" name="element" id="element" />

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                if (isset($_POST['send']) && !empty($_POST['send'])) {

                    if (isset($_POST['hiddens']) && !empty($_POST['hiddens'])) {

                        foreach ($_POST['hiddens'] as $hiddens) {
                            echo "<input type='hidden' name='hiddens[]' value='" . $hiddens . "' /> ";
                        }
                    }

                    if (isset($_POST['element']) && !empty($_POST['element'])) {
                        echo "<input type='hidden' name='hiddens[]' value='" . $_POST['element'] . "' /> ";
                    }
                } else {
                }
            }

            ?>
        </p>

        <button type="submit" name="send" id="send" value="send">Enviar</button>
    </form>

    <br>
    <hr><br>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['send']) && !empty($_POST['send'])) {


            if (isset($_POST['hiddens']) && !empty($_POST['hiddens'])) {

                foreach ($_POST['hiddens'] as $hiddens) {
                    echo $hiddens . "<br>";
                }
            }

            if (isset($_POST['element']) && !empty($_POST['element'])) {
                echo $_POST['element'] . "<br>";
            }
        } else {

            echo "No viene de formulario";
        }
    }

    ?>

</body>

</html>