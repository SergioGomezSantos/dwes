<?php

session_start();
include('footer.php');

if (!is_array($_SESSION['items'])) {

    $_SESSION['items'] = array();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Deseos</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>

    <br>

    <form name="formDeseos" method="POST" action="">

        <input type="checkbox" name="items[]" id="item1" value="Item 1">
        <label for="item1">Item 1</label>
        <br>
        <input type="checkbox" name="items[]" id="item2" value="Item 2">
        <label for="item2">Item 2</label>
        <br>
        <input type="checkbox" name="items[]" id="item3" value="Item 3">
        <label for="item3">Item 3</label>
        <br>
        <input type="checkbox" name="items[]" id="item4" value="Item 4">
        <label for="item4">Item 4</label>
        <br>
        <input type="checkbox" name="items[]" id="item5" value="Item 5">
        <label for="item5">Item 5</label>

        <br><br>

        <button type="submit" name="send" id="send" value="send">Seleccionar</button>
        <button type="submit" name="selected" id="selected" value="selected">Ver Seleccionados</button>
        <button type="submit" name="resetSelected" id="resetSelected" value="resetSelected">Reset Seleccionados</button>
        <button type="submit" name="write" id="write" value="write">Escribir Archivo</button>
        <button type="submit" name="read" id="read" value="read">Leer Archivo</button>
        <button type="submit" name="resetFile" id="resetFile" value="resetFile">Reset Archivo</button>
    </form>

    <br>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['send']) && !empty($_POST['send'])) {
            select();
        }

        if (isset($_POST['selected']) && !empty($_POST['selected'])) {
            readSession();
        }

        if (isset($_POST['resetSelected']) && !empty($_POST['resetSelected'])) {
            resetSession();
        }

        if (isset($_POST['write']) && !empty($_POST['write'])) {
            write();
        }

        if (isset($_POST['read']) && !empty($_POST['read'])) {
            read();
        }

        if (isset($_POST['resetFile']) && !empty($_POST['resetFile'])) {
            resetFile();
        }
    }

    function select()
    {
        if (isset($_POST['items'])) {

            echo "Has seleccionado: ";
            foreach ($_POST['items'] as $item) {

                array_push($_SESSION['items'], $item);
                echo $item . " ";
            }
        } else {

            echo "No has seleccionado ningún item";
        }
    }

    function readSession()
    {
        echo "Has seleccionado: ";

        foreach ($_SESSION['items'] as $item) {
            echo $item . " ";
        }
    }

    function resetSession()
    {
        $_SESSION['items'] = array();
    }

    function write()
    {
        $fp = fopen('deseos.txt', "a");

        if (!$fp) {
            echo "Error al interactuar con el archivo";
        }

        fwrite($fp, json_encode($_SESSION['items'], JSON_FORCE_OBJECT));

        fclose($fp);
        $_SESSION['items'] = array();

        read();
    }

    function read()
    {
        $items_json = file_get_contents('deseos.txt');
        $items = json_decode($items_json, true);

        echo "Items guardados: " . "<br>";

        foreach ($items as $item) {
            echo $item . "<br>";
        }
    }

    function resetFile()
    {
        $fp = fopen("deseos.txt", "a");

        if (!$fp) {
            echo "Error al interactuar con el archivo";
        }

        ftruncate($fp, 0);

        fclose($fp);
    }

    footer();
    ?>

</body>

</html>

<!-- Desplegable con lista de items
Selecciona -> has seleccionado X

Utilizar Sesiones
Escribir y recuperar información cdificando/descodificando json -->