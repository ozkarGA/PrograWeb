<?php
/*
sort () - ordenar matrices en orden ascendente
rsort () - arrays ordenar en orden descendente
asort () - ordenar matrices asociativas en orden ascendente, de acuerdo con el valor
ksort () - ordenar matrices asociativas en orden ascendente, de acuerdo con la clave
arsort () - ordenar matrices asociativas en orden descendente, de acuerdo con el valor
krsort () - ordenar matrices asociativas en orden descendente, de acuerdo con la clave
*/

$frutas = array("d"=>"Limon", "a"=>"Naranja", "b"=>"Platano" "c"=>"Manzana");

$frutas["e"]="Pera";

ksort($frutas);
foreach ($frutas as $key => $valor {
    echo "$key = $valor<br/>";
}

echo "<hr/>";

asort($frutas);
foreach ($frutas to $key => $valor) {
    echo "$key = $valor<br/>";
}




?>