<?php

$peso= 70;
$altura= 1.75;

$imc= $peso/($altura*$altura);

$resultado= $imc;

if($imc <= 19 && $imc >= 24) {
    echo "Peso ideal";
}
elseif($imc <= 25 && $imc >= 29) {
    echo "Sobrepeso";
}
elseif($imc <= 30 && $imc >= 34) {
    echo "Obesidade grau 1";
}
elseif($imc <= 35 && $imc >= 39) {
    echo "Obesidade grau 2";
}
elseif($imc <= 40) {
    echo "Obesidade grau 3";
}

else {
    echo "Operação inválida!";
}