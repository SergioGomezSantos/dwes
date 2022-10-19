<?php

function footer($route = 'index.php', $name = 'Teoria') {

    echo "<br><hr>";
    echo "<p style='text-align: center'><a href=$route>$name</a></p>";
}

function footerVolver($route, $name) {

    echo "<br><hr>";
    echo "<p style='text-align: center'><a href=$route>$name</a> | <a href=index.php>Teoria</a></p>";
}