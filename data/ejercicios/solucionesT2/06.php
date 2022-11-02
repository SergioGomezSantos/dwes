<?php

// Declaración de los arrays usando las 2 formas

 $team1 = ["Jugador A", "Jugador B", "Jugador C", "Jugador D", "Jugador E"];
$team2 = array("Jugador F", "Jugador G", "Jugador H", "Jugador I", "Jugador J");


// Echo del texto informativo

echo "Equipo 1: " . "<br>";
echo "<ul>";


// Bucle para mostrar los jugadores en forma de lista

foreach ($team1 as $player) {
    echo "<li>" . $player . "</li>";
}
echo "</ul>";




echo "<br><hr><br>";




// Echo del texto informativo

echo "Equipo 2: " . "<br>";
echo "<ul>";


// Bucle para mostrar los jugadores y su posición en forma de lista

for ($i = 0 ; $i < count($team2) ; $i++) {
    echo "<li>" . "Posición " . $i . ": " . $team2[$i] . "</li>";
}
echo "</ul>";