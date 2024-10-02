<?php
/*
Dado un número constante, por ejemplo el 169 o 193, mostrar la lista de todos sus divisores. Si
no los hay decir que el número es primo.
*/
$contador = 0;
define ('NUMERO', 169);
for($i = 1; $i <= 169 ;$i++){
    if(NUMERO % $i == 0){
        $contador++;
        echo $i . "<br>";
        
    }
}
if($contador == 0){
    echo "El número es primo";
}