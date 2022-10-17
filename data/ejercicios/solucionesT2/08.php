<?php 

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