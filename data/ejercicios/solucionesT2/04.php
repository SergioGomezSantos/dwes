<?php

// Echo del texto informativo

echo "Sucesión de Fibonacci: " . "<br>";
echo "<ul>";


// Declaración del Array con el primer valor ya iniciado

$fibonacci = [1];


// Bucle para mostar la sucesión

for ($i = 0 ; $i <= 10 ; $i++) {

    // Añador al array el valor de la posicion equivalente a $i en cada vuelta del bucle sumado a la posición anterior
    // En la primera vuelta del bucle, como no hay valor para la posicion anterior, se queda como 1
    
    $newValue = $fibonacci[$i] + $fibonacci[$i-1];
    $fibonacci[] = $newValue;
    
    echo "<li>" . "Número " . $i . ": " . $fibonacci[$i] .  "</li>";
}   

echo "</ul>";