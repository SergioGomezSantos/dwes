<?php

// time(); epoch time | unix time -> seg since 1970

// time()+(24*60*60);
// strtotime("+1 day"); 

setcookie('primeraCookie', 'aceptado', time() + 60);
setcookie('segundaCookie', 150, time() + 600);

// setcookie('primeraCookie', 'aceptado', time()-120);
// unset($_COOKIE['primeraCookie']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['option']) && !empty($_POST['option'])) {

        switch ($_POST['option']) {

            case "value":
                echo isset($_COOKIE['primeraCookie']) ? "Valor: " . $_COOKIE['primeraCookie'] : "Ya no existe";
                break;

            case "unset":
                unset($_COOKIE['primeraCookie']);
            break;

            default:
                echo "Error. No viene de formulario";
                break;
        }

    } else {

        echo "Error. No viene de formulario";
    }
}
