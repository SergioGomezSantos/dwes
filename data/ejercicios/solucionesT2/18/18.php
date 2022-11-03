<?php


/* 

        Si el ejercicio da problemas, puede ser por permisos en la carpeta lists/ 

*/


// Require para acceder a 18_App.php, crear un objeto App

require_once "18_App.php";
$app = new App;


// Switch al parámetro option del GET. Si coincide con algun case, lanza la función correspondiente de la App o lanza login() por defecto

switch ($_GET['option']) {

    case "menu":

        $app->home();
        break;

    case "new":

        $app->new();
        break;

    case "delete":

        $app->delete();
        break;

    case "reset":

        $app->reset();
        break;

    case "close":

        $app->close();
        break;

    default:

        $app->login();
        break;
}
