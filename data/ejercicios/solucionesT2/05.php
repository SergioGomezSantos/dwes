<?php

// Declaración de las constantes

CONST NUMBER1 = 169;
CONST NUMBER2 = 193;


// Llamada de las funciones

$divisibles1 = getDivisores(NUMBER1);
$divisibles2 = getDivisores(NUMBER2);

printDivisores($divisibles1, NUMBER1);
printDivisores($divisibles2, NUMBER2);


// Función para encontrar los divisores a partir del $number que recibe
// Devuelve un array con los divisores

function getDivisores($number) {

    for ($i = 1 ; $i <= $number ; $i++) {
        if ($number%$i === 0) {
            $arrayDivisores[] = $i;
        }
    }

    return $arrayDivisores;
}

// Función para mostrar el número y los divisores que recibe
// Si solo tiene 2 divisores, quiere decir que es un número primo y lo muestra como tal en foma de lista
// Si tiene más de 2 divisores, los muestra en forma de lista

function printDivisores($arrayDivisores, $number) {

    if (count($arrayDivisores) === 2) {

        echo $number . " es un número primo - ";   
    }

    echo "Divisores de " . $number . ": " ;
    echo "<ul>";


    foreach ($arrayDivisores as $divisor) {
        echo  "<li>$divisor</li>";
    }

    echo "</ul>";
}