<?php
/*
Repite el ejercicio 8 creando un array asociativo. Cada posición se llamará: base, escolta, alero,
alapivot, pivot. Muestra el resultado con un foreach (clave => valor).
*/

$equipo = array (
"Base"=>"Juan",
 "Escolta"=>"Isra",
"AleroI"=>"Javier",
 "AleroD"=>"Pau",
  "Pibot"=>"Marc" );

  foreach($equipo as $claves => $jugador){
    echo $claves .":". $jugador . "<br>";
} 



?>