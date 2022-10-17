<?php 

$countries = ["España", "Francia", "Inglaterra", "Alemania"];

echo "Países: " . "<br>" . "<ul>";
foreach ($countries as $country) {
    echo "<li>". $country . "</li>" . "<br>";
}
echo "</ul>";