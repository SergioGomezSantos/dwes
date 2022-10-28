<?php

require_once "23_App.php";
$app = new App;

switch ($_GET['option']) {
    
    case "new":

        $app->new();
        break;

    case "delete":

        $app->delete();
        break;

    case "reset":

        $app->reset();
        break;

    default:

        $app->home();
        break;
}