<?php

$valor1 = 8;
$valor2 = 10;
$valor3 = 5;

$media= ($valor1+$valor2+$valor3) / 3;

if($media >= 7) {
echo "Aprovado direto!";
}
elseif($media >= 5 && $media < 7) {
echo "Tem direito a recuperação!";
} 
else {
echo "Reprovado!";
}