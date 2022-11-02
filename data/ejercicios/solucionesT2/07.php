<?php 

// Declaración del array

$countries = ["España", "Francia", "Inglaterra", "Alemania"];


// Echo del texto informativo

echo "Países: " . "<br>" . "<ul>";


// Bucle para mostrar cada país del array en forma de lista

foreach ($countries as $country) {
    echo "<li>". $country . "</li>";
}

echo "</ul>";