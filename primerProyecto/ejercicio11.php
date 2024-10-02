<?php


$paises = array(
array("Pais"=>"España","Moneda"=>"Euro","Poblacion"=>47000078),
array("Pais"=>"Portugal","Moneda"=>"Euro","Poblacion"=>10000041),
array("Pais"=>"Suiza","Moneda"=>"Franco","Poblacion"=>8960705),
array("Pais"=>"Francia","Moneda"=>"Euro","Poblacion"=>67000000)
);
foreach ($paises as $fila){
    foreach ($fila as $clave => $valor){
        echo $clave .":".$valor."  ";
    }
    echo "<br>";
}
$paises2 = [
    "ESpaña"=>["Euro",47000078],
    "Portugal"=>["EUro",10000041],
    "Suiza"=>["Franco",8960705],
    "Francia"=>["Euro",67000000]
];
foreach ($paises2 as $fila2){
    foreach ($fila2 as $clave2 => $valor2){
        echo $fila2.":".$clave2 ."  ".$valor2."  ";
    }
    echo "<br>";
}

























?>