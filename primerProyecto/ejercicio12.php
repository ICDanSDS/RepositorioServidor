<?php
/*
12. Crea una función para resolver ecuaciones de segundo grado. 
Esta función debe recibir los
coeficientes de la ecuación y devolver un array con las soluciones. 
Si no hay soluciones reales
devuelve FALSE.
*/
$a = 1;$b=2;$c=-15;
function resolverEcuacion($a, $b, $c) {
    $raiz1 = $b*$b - 4*$a*$c;
    $raiz2 =  sqrt($raiz1);
    $multiA= -$b+($raiz2);
    $multiB= -$b-($raiz2);
    //echo $multiA ." ".$multiB;
    $sol1 = $multiA / (2*$a);
    $sol2 = $multiB / (2*$a);

    if($raiz2 < 0){
        return false;
    }
   
    else{
     $tabla = array(
            array("Solucion A"=>$sol1,"Solucion B"=>  $sol2)
        );
    }
    foreach($tabla as $tabl){
        foreach($tabl as  $val => $sol){
            echo  $val." : ".$sol." ";
        }
    echo "<br>";
    }
   
} 
echo  resolverEcuacion($a,$b,$c);