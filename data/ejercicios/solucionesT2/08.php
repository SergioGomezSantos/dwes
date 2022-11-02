<?php 

// Declaración de los arrays de 2 formas distintas añadiendo los elementos de 1 en 1

$team1[] = "Jugador A";
$team1[] = "Jugador B";
$team1[] = "Jugador C";
$team1[] = "Jugador D";
$team1[] = "Jugador E";

$team2 = array("Jugador F");
array_push($team2, "Jugador G");
array_push($team2, "Jugador H");
array_push($team2, "Jugador I");
array_push($team2, "Jugador J");


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