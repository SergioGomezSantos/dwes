<?php

include_once 'footer.php';

const CONSTANTEA = 1;
define("CONSTANTEB", 2);

echo 'Constante A: ' . CONSTANTEA;
echo '<br>';
echo 'Constante B: ' . CONSTANTEB;

echo '<br>';

$var1 = 1;
echo 'Variable tipo ' . gettype($var1) . ' convertida en string: ' . (string)$var1;
echo "<br>";

footerVolver('info.php#Variables', 'Información');