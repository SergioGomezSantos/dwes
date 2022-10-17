<?php

$fibonacci = [1];

for ($i = 0 ; $i <= 10 ; $i++) {

    $newValue = $fibonacci[$i] + $fibonacci[$i-1];
    $fibonacci[] = $newValue;
    
    echo "Número " . $i . ": " . $fibonacci[$i] .  "<br>";
}   