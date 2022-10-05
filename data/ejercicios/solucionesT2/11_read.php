<?php

require 'footer.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['send']) && !empty($_POST['send'])) {

        echo "Titulo: " . (!empty($_POST['title']) ? $_POST['title'] : "-") . "<br>";
        echo "Autor: " . (!empty($_POST['author']) ? $_POST['author'] : "-") . "<br>";
        echo "Editorial: " . (!empty($_POST['editorial']) ? $_POST['editorial'] : "-") . "<br>";
        echo "Paginas: " . (!empty($_POST['pages']) ? $_POST['pages'] : "-") . "<br>";

    } else {
        echo "No viene de formulario";
    }

    footer('11.php');
}