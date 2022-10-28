<?php

require_once "19_App.php";
$app = new App;

if (isset($_GET['method']) && htmlspecialchars($_GET['method']) === 'cambio') {

    $app->cambio();
    echo "cambio";

} else {

    $app->home();
}

// Colorear una página con ayuda de una cookie. Usaremos la clase App con los siguietens métodos:
// home  muestra un mensaje de bienvenida. Comprueba si hay una cookie llamada "color". Si existe la usa para darle color al fondo de la ágina.
// colores  muestra una lista de colores. Cada color tiene un enlace del estilo ?method=cambio&color=red . Al hacer clic cambiará el color del home.
// cambio . Recibe el color de la página anterior, crea la cookie y reenvia ('header...') al método home.
// NOTA: dos vistas (home y colores) y un reenvío (cambio).