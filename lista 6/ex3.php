<?php

$opcao = 2;
echo"Bem Vindo à Alares Internet <br>";
echo "1-Suporte Técnico <br>";
echo "2-Segunda via da fatura <br>";
echo "3-Falar com Atendente <br>";
echo "4-Sair <br><br>";

switch($opcao) {
    case 1:
        echo "Você escolheu: Suporte Técnico.";
        break;
    case 2:
        echo "Você escolheu: Segunda via da fatura.";
    break;
    case 3:
        echo "Você escolheu: Falar com Atendente.";
    break;
    case 4:
        echo "Você escolheu: Sair.";
    default:
        echo "Opção inválida!";
}