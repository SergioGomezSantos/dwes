<?php

require_once 'footer.php';

$global = $_SERVER;

foreach ($global as $clave => $valor) {
    echo $clave . " => " . $valor;
    echo "<br>";
}

footer();