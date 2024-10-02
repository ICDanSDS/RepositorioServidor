<?php
/*
Imprimir la tabla de multiplicar del 8. Usar una constante para que fácilmente podamos
adaptarla a otros números.
*/
define ('NUMERO', 8);
for($i = 0;$i <= 10;$i++){
    $total = $i *  NUMERO;
    
    echo $total ."<br>";
}