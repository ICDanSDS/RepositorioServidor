<?php
/*Construir un array con el quinteto inicial de un equipo de basket. Imprímelo usando etiquetas
html de dos formas diferentes:
a) Indicando solo los nombres.
b) Indicando la posición del nombre en el array (0, 1, 2, ...).*/

$equipo = ["Juan","Isra","JAvier","PAu","MArc"];
foreach($equipo as $jugador){
    echo $jugador."<br>";
}
foreach($equipo as $numero => $jugador){
    echo $numero.$jugador."<br>";
}