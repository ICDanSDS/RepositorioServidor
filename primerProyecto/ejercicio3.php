<?php
/*
Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá
estar almacenada en una variable.
*/

$euros = 10;
$pesetas = 166.386;

$total = $euros *  $pesetas;
echo "<br>  La cantidad de euros que se quiere convertir en pesetas es: $euros euros";
echo "<br>  $euros euros convertidos en pesetas son: " . $total;