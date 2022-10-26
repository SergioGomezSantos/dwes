<?php

require_once "18_App.php";
$app = new App;


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
