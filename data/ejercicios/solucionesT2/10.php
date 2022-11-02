<?php

// Delcaración de los arrays asociativos usando las 2 formas

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


// Echo del texto informativo y llamada a la función

echo "Equipo 1: ";
printTeam($team1);



echo "<br><hr><br>";



// Echo del texto informativo y llamada a la función

echo "Equipo 2: ";

printTeam($team2);


// Función para recorrer el array que recibe y mostrar los diferentes $key => $value en forma de lista

function printTeam($team)
{
    echo "<ul>";
    foreach ($team as $position => $player) {
        echo "<li>" . "Posición " . $position . ": " . $player . "</li>";
    }
    echo "</ul>";
}
