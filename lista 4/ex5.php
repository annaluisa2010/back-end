<?php

$aposta = 10;
$senha = 5;
$numero_sorteado = 5;
$numero = $numero_sorteado+1;

if($numero == $numero_sorteado+1){
    echo "Você ganhou R$: ", $aposta * 5;
}
else{
    echo "Quase acertou, seu número: ", $numero;
    echo "Número sorteado: ", $numero_sorteado+1;
}
?>