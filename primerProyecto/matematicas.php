<?php

$a ;$b;$c;
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