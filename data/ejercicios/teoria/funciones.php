<?php

require 'footer.php';

$var1 = 2;
$var2 = 3;

function suma($a, $b) {
    
    return $a + $b;
}

echo "Suma de 1 + 2 = " . suma(1,2) . "<br>";
echo "Suma de " . $var1 . " + " . $var2 . " = " . suma($var1, $var2) . "<br>";



echo "<br>";



function sumaGlobal() {

    global $var1;
    global $var2;

    return $var1 + $var2;
}

echo "Suma de las variables globales " . $var1 . " + " . $var2 . " = " . sumaGlobal();
echo "<br>";

function sumaGlobalRedefinidas() {

    global $var1;
    global $var2;

    $var1 = 10;
    $var2 = 20;

    return $var1 . " + " . $var2 .  " = " . ($var1 + $var2);
}

echo "Suma de las variables globales redefinidas " . sumaGlobalRedefinidas() . "<br>";



echo "<br>";



function staticF() {
    static $varStatic = 0;
    $varStatic++;
    
    return $varStatic;
}


for ($i = 0 ; $i < 3 ; $i++) {
    echo "La variable estatica es: " . staticF() . "<br>";
}



echo "<br>";



function referencia(&$var1, &$var2) {
    $var1++;
    echo "Modifico el primer digito por referencia: " . $var1 . "<br>";
    return $var1 + $var2;
}

echo "La suma por referencia de " . $var1 . " + " . $var2 . " = " . referencia($var1, $var2) . "<br>";

function valor($var1, $var2) {
    $var1++;
    echo "Modifico el primer digito por valor: " . $var1 . "<br>";
    return $var1 + $var2;
}

echo "La suma por valor de " . $var1 . " + " . $var2 . " = " . valor($var1, $var2) . "<br>";


footer();