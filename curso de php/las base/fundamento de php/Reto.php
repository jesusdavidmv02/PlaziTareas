<?php


$numero_tienda = (int) readline("digite la tienda : ")  ; 

$anterio = 0 ;
$actual = 1;

for ($i=2; $i <= $numero_tienda ; $i++) { 
    $temp= $actual;
    $actual += $anterio;
    $anterio = $temp;
}

echo "cuanta formas hay de llegar : " . $actual;