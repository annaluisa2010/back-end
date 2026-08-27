<?php

$n1= 104;
$n2= 15;
$operacao= "*";

if($operacao == "+") {
    echo "O resultado da soma é: ", $n1+$n2;
}
elseif($operacao == "-") {
    echo "O resultado da subtração é: ", $n1-$n2;
}
elseif($operacao == "*") {
    echo "O resultado da multiplicação é: ", $n1*$n2;
}
elseif($operacao == "/") {
    echo "O resultado da divisão é: ", $n1/$n2;
}
else {
echo "Erro. Operação inválida!";
}