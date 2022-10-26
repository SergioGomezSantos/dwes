<?php

include 'footer.php';

session_start();

$_SESSION = array();
session_destroy();
setCookie(session_name(), '', time() - 60, '/');

$_SESSION['contador'] ? $contador = $_SESSION['contador'] : $contador = "Session Destroyed";
echo "Visitas a sesiones.php desde sesionesTeoria2.php: " . $contador . "<br>";

footerVolver("sesionesTeoria.php", "Sesiones 1");