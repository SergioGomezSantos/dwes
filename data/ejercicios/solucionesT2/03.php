<?php

echo "Números del 1 al 10 divisibles por 3: " . "<br>";
echo "<ul>";

for ($i = 1 ; $i <= 10 ; $i++) {
    
    if ($i%3 === 0) {
        echo "<li>" . $i . "</li>". "<br>";
    }

}

echo "</ul>";