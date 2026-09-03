<?php

$opcao = 2;
echo"League of Legends";
echo "1-Jogar <br>";
echo "2-Ver Personagens <br>";
echo "3-Ver Ranking <br>";
echo "4-Configurações <br>";
echo "Sair";

switch($opcao) {
    case 1:
        echo "BOM JOGO!.";
        break;
    case 2:
        echo "Personagens disponíveis:<br>";
        echo: "Jinx<br>";
        echo: "Vi <br>";
        echo: "Caitlyn";
    break;
    case 3:
        echo "Ranking Atual: <br>";
        echo: "🏆 Anna_incrível<br>"
        echo: "🥈 Maria_morango <br>"
        echo: "🥉 BiVi_feios"
    break;
    case 4:
        echo "Configurações:";
        echo: "- Alterar Username <br>"
        echo: "- Trocar Personagem <br>"
        echo: "- Explorar Mapa"
    break;
    case 5:
        echo: "Até a Próxima!
    default:
        echo "Opção inválida!";
}