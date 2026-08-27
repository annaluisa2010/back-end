<?php

$nome = "Jhon Wick";
$acesso = 3;

if($acesso == 1) {
echo "Bem vindo, $nome! Você tem acesso básico ao sistema!";
}
elseif($acesso == 2) {
echo "Bem vindo, $nome! Você tem acesso moderado ao sistema!";
}
elseif($acesso == 3) {
echo "Bem vindo, $nome! Você tem acesso avançado ao sistema!";
}
else {
echo "Erro. Número de acesso inválido!";
}
