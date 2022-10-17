<?php

CONST NUMBER1 = 169;
CONST NUMBER2 = 193;

$divisibles1 = getDivisores(NUMBER1);
$divisibles2 = getDivisores(NUMBER2);

printDivisores($divisibles1, NUMBER1);
printDivisores($divisibles2, NUMBER2);


function getDivisores($number) {
    for ($i = 1 ; $i <= $number ; $i++) {
        if ($number%$i === 0) {
            $arrayDivisores[] = $i;
        }
    }

    return $arrayDivisores;
}


function printDivisores($arrayDivisores, $number) {

    if (count($arrayDivisores) === 2) {

        echo $number . " es un número primo - ";   
    }

    echo "Divisores de " . $number . ": " . "<ul>";


    foreach ($arrayDivisores as $divisor) {
        echo  "<li>$divisor</li>";
    }

    echo "</ul>";
}