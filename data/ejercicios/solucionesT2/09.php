<?php 

$countries[] = "España";
$countries[] = "Francia";
$countries[] = "Inglaterra";
$countries[] = "Alemania";

echo "Países: " . "<br>" . "<ul>";
foreach ($countries as $country) {
    echo "<li>". $country . "</li>" . "<br>";
}
echo "</ul>";