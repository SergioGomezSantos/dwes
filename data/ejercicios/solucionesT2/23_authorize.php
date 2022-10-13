<?php

const WISH_LIST = "23.txt";
echo "a";
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

            default:
                break;
        }
    } else {

        echo "No viene de formulario";
    }
}

function homeButton() {

    $fp = fopen(WISH_LIST, "r");

    if (!$fp) {
        echo "Error al interactuar con el archivo";
    }

    while (!feof($fp)) {
        $line = fgets($fp);
        echo $line;
        echo "a";
    }
}

function newButton() {

}

function clearButton() {

}