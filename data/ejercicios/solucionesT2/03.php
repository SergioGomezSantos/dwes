<?php

// Echo del texto informativo

echo "Números del 1 al 10 divisibles por 3: " . "<br>";
echo "<ul>";


// Bucle para mostrar los números divisibles por 3 entre 1-10 en forma de lista

for ($i = 1 ; $i <= 10 ; $i++) {
    
    if ($i%3 === 0) {
        echo "<li>" . $i . "</li>";
    }

}

echo "</ul>";