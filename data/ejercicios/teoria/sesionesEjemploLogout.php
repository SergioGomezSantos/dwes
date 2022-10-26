<?php

session_start();

const USER1 = 'usuario';
const USER2 = 'admin';

if (isset($_SESSION['rol'])) {

    $_SESSION = array();
    session_destroy();
    setCookie(session_name(), '', time() - 60, '/');

    header('Location: sesionesEjemplo.php');
    exit();
}
