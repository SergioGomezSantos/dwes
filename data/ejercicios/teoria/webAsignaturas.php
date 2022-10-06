<?php

include 'asignatura.php';
include 'modulo.php';
include 'footer.php';

$bbdd = new asignatura("BBDD", 6);
echo $bbdd;
$bbdd::setCicle("DAM");
echo $bbdd::getCicle();

echo "<br>";

$modulo = new modulo("BBDD2", 9, 123);
echo $modulo;
$modulo::setCicle("DAM2");
echo $modulo::getCicle();

footerVolver('info.php#Objetos', 'Información');