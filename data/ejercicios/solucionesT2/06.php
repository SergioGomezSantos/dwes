<?php

$team1 = ["Jugador A", "Jugador B", "Jugador C", "Jugador D", "Jugador E"];
$team2 = array("Jugador F", "Jugador G", "Jugador H", "Jugador I", "Jugador J");


echo "Equipo 1: " . "<br>";
echo "<ul>";
foreach ($team1 as $player) {
    echo "<li>" . $player . "</li>";
}
echo "</ul>";


echo "<br><hr><br>";


echo "Equipo 2: " . "<br>";
echo "<ul>";
for ($i = 0 ; $i < count($team2) ; $i++) {
    echo "<li>" . "Posición " . $i . ": " . $team2[$i] . "</li>";
}
echo "</ul>";