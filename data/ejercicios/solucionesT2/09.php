<?php 

// Declaración del array añadiendo los elementos de 1 en 1

$countries[] = "España";
$countries[] = "Francia";
$countries[] = "Inglaterra";
$countries[] = "Alemania";


// Echo del texto informativo

echo "Países: " . "<br>" . "<ul>";


// Bucle para mostrar cada país en formato de lista

foreach ($countries as $country) {
    echo "<li>". $country . "</li>" . "<br>";
}

echo "</ul>";