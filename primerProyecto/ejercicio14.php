<?php
/*
14. Escribe una función que reciba una cadena y compruebe si es palíndromo.
*/
function esPalindromo($cadena){
    $cadena = strtolower($cadena);//minusculas
    $cadenaReves = strrev($cadena);//revertir la palabra

    if($cadena == $cadenaReves){
        return true;

    }else{
        return false;
    }

}
$palabra = "abba";
if(esPalindromo($palabra)){
    echo "Es palindromo";
}else{
    echo "No es palindromo";
}
/*
function esPalindromo2($cadena){
    $cadena = strtolower($cadena);
   for($i=0;$i<strlen($cadena);$i){
    if($cadena[$i] == $cadena[strlen($cadena)-$i-1]){
        return false;
    }
   return true;
   }

}*/