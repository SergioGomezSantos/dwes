<?php

// Declaración de la contstante

CONST NUMBER = 8;


// Echo del texto informativo

echo "Tabla del 8: ";
echo "<ul>";


// Bucle echo para mostrar la tabla de multiplicar en forma de lista

for ($i = 0 ; $i <= 10 ; $i++) {
    echo "<li>" . NUMBER . " x " . $i . " = " . NUMBER * $i . "</li>";
}

echo "</ul>";