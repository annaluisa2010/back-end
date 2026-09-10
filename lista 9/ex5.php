<?php

$numeros = ["080000000", "999022306", "479903128", "347271318", "555000000"];
$soma = 0;

foreach($numeros as $numeros){
    echo "$numeros <br>";
    $soma = $soma + 1;
}
echo "Total de números: $soma";