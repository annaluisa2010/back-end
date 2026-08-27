<?php

$valor = "50,00";
$valorminimoentrega = "20,00";
$idadecliente = 24;
$idademinimabebidaalcoolica = 18;
$estoquedisponivel = 10;
$quantidadepedida = 3;
$statuspedido1 = "Pedido realizado com sucesso!";
$stauspedido2 = "Pedido não realizado, estoque insuficiente!";


if ($valor >= $valorminimoentrega) {
    echo "Você iberou entrega grátis! Pague apenas o valor do produto!(R$50,00) <br>";
} else {
    echo "Entrega: R$20,00 <br>";
}

if ($idadecliente >= $idademinimabebidaalcoolica) {
    echo "Você pode comprar bebida alcoolica! <br>";
} else {
    echo "Você não pode comprar bebida alcoolica! <br>";
}

if ($estoquedisponivel >= $quantidadepedida) {
    echo "Pedido realizado com sucesso! <br>";
} else {
    echo "Pedido não realizado, estoque insuficiente! <br>";
}

if($quantidadepedida <= $estoquedisponivel = $statuspedido1) {
    echo "Pedido realizado com sucesso! <br>";
} else {
    echo "Pedido não realizado, estoque insuficiente! <br>";
}