<?php

include 'footer.php';

session_start();

!isset($_SESSION['contador']) ? $_SESSION['contador'] = 0 : $_SESSION['contador']++;

echo "Visitas a sesiones.php desde sesiones.php: " . $_SESSION['contador'] . "<br>";
echo '<br>' . '<a href="sesionesTeoria2.php">Sesiones 2</a>' . '<br>'; 

footerVolver("sesiones.php", "Sesiones");

$_SESSION['toDestroy'] = 'toDestroy';