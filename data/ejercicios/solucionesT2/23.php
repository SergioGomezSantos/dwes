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

                    case "newWish":
                        if (isset($_POST['addWish']) && !empty($_POST['addWish'])) {
                            addWish($_POST['addWish']);
                        } else {
                            echo "Error. No hay deseo";
                        }
                        break;

                    case "delWish":
                        if (isset($_POST['removeWish']) && !empty($_POST['removeWish'])) {
                            removeWish($_POST['removeWish']);
                        } else {
                            echo "Error. No hay deseo";
                        }
                        break;

                    default:
                        echo "Error. No viene de formulario";
                        break;
                }
            } else {

                echo "Error. No viene de formulario";
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
                <label for="addWish">Nuevo Deseo: </label>
                <input type="text" name="addWish" id="addWish" />
                <button type="submit" id="newWish" name="option" value="newWish">Enviar</button>
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

        function delete()
        {
            $fp = fopen(WISH_LIST, "r");

            if ($fp) {

                while (!feof($fp)) {
                    $line = fgets($fp);
                    $list[] = $line;
                }

                fclose($fp);
                unset($list[0]);

                echo "Selecciona el deseo a Borrar: " . "<br>";

                echo '
                <form name="deleteForm" method="POST" action="">
                    <select id="removeWish" name="removeWish">
                ';
                foreach ($list as $key => $value) {
                    echo '<option value="' . $key . '">' . trim($value, '-') . '</option>';
                }
                echo '
                    </select>
                    <button type="submit" id="delWish" name="option" value="delWish">Borrar</button>
                </form>
                ';
            } else {
                echo "Error al leer el archivo";
            }
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

        function removeWish($delWish)
        {

            $fp = fopen(WISH_LIST, "a+");

            if ($fp) {

                while (!feof($fp)) {
                    $line = fgets($fp);
                    $list[] = $line;
                }

                unset($list[$delWish]);
                ftruncate($fp, 0);

                foreach ($list as $newLine) {
                    fwrite($fp, $newLine);
                }

                fclose($fp);
                homeButton();
            } else {
                echo "Error al leer el archivo";
            }
        }

        ?>

    </div>

</body>

</html>