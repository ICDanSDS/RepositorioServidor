<?php
/*Imprimir los 10 primeros números de la sucesión Fibonacci. La sucesión comienza con los
números 0 y 1; a partir de estos cada término es la suma de los dos anteriores.*/
$a =0;
$b = 1;


for ($i=0; $i < 10; $i++) {
    $resultado = $a + $b;
    echo $resultado;
    $a =  $b;
    $b = $resultado;

}