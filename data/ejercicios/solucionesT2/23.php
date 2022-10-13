<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lista de Deseos</title>
    <style>
        div {
            text-align: center;
            margin-top: 30px;
        }

        button {
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <div>
        <form name="formulario" method="POST" action="">
            <button type="submit" id="home" name="option" value="home">Home</button>
            <button type="submit" id="new" name="option" value="new">New</button>
            <button type="submit" id="clear" name="option" value="clear">Clear</button>
            <button type="submit" id="delete" name="option" value="delete">Delete</button>
        </form>

        <br>
        <hr>

        <?php

        const WISH_LIST = "23.txt";
        const RESET_WISH_LIST = 16;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['option']) && !empty($_POST['option'])) {

                switch ($_POST['option']) {

                    case "home":
                        homeButton();
                        break;

                    case "new":
                        newButton();
                        break;

                    case "clear":
                        clearButton();
                        break;

                    case "delete":
                        delete();
                        break;

                    default:
                        break;
                }
            } elseif (isset($_POST['newWish']) && !empty($_POST['newWish'])) {
                addWish($_POST['newWish']);
            } else {

                echo "No viene de formulario";
            }
        }

        function homeButton()
        {
            $fp = fopen(WISH_LIST, "r");
            if ($fp) {

                while (!feof($fp)) {
                    $line = fgets($fp);
                    echo $line . "<br>";
                }

                fclose($fp);
            } else {
                echo "Error al leer el archivo";
            }
        }

        function newButton()
        {
            echo '
            <form name="newForm" method="POST" action="">
                <label for="newWish">Nuevo Deseo: </label>
                <input type="text" name="newWish" id="newWish" />
                <button type="submit" name="send" id="send" value="send">Enviar</button>
            </form>
            ';
        }

        function clearButton()
        {
            $fp = fopen(WISH_LIST, "a");

            if (!$fp) {
                echo "Error al interactuar con el archivo";
            }

            ftruncate($fp, RESET_WISH_LIST);

            fclose($fp);
            homeButton();
        }

        function addWish($newWish)
        {
            $fp = fopen(WISH_LIST, "a");

            if (!$fp) {
                echo "Error al interactuar con el archivo";
            }

            fwrite($fp, PHP_EOL . "- " . $newWish);

            fclose($fp);
            homeButton();
        }

        function delete()
        {
            $fp = fopen(WISH_LIST, "r");

            if ($fp) {

                while (!feof($fp)) {
                    $line = fgets($fp);
                    $lista[] = $line;
                }

                fclose($fp);
                unset($lista[0]);

                echo "Selecciona el deseo a Borrar: " . "<br>";

                echo '
                <form name="deleteForm" method="POST" action="">
                    <select id="delWish" name="delWish">
                ';
                foreach ($lista as $key => $value) {
                    echo '<option value="' . $key . '">' . $value . '</option>';
                }  
                echo '
                    </select>
                    <button type="submit" name="send" id="send" value="send">Enviar</button>
                </form>
                ';

            } else {
                echo "Error al leer el archivo";
            }
        }

        ?>

    </div>

</body>

</html>