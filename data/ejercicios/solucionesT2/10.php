<?php

$team1 = [
    "base" => "Jugador A",
    "escolta" => "Jugador B",
    "alero" => "Jugador C",
    "alapivot" => "Jugador D",
    "pivot" => "Jugador E"
];
$team2 = array(
    "base" => "Jugador F",
    "escolta" => "Jugador G",
    "alero" => "Jugador H",
    "alapivot" => "Jugador I",
    "pivot" => "Jugador J"
);


echo "Equipo 1: " . "<br>";
printTeam($team1);
echo "<br><hr><br>";
echo "Equipo 2: " . "<br>";
printTeam($team2);


function printTeam($team)
{
    echo "<ul>";
    foreach ($team as $position => $player) {
        echo "<li>" . "Posición " . $position . ": " . $player . "</li>";
    }
    echo "</ul>";
}
