<?php

session_start();

// Require para acceder a 21_App.php, crear un objeto App

require_once "21_App.php";
$app = new App;



// Si el parámetro option del GET existe y si su contenido es "cambio", lanza cambio()
// Si no, lanza home()

(isset($_GET['method']) && htmlspecialchars($_GET['method']) === $app::METHOD) ? $app->cambio() : $app->home();