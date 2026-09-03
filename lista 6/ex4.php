<?php

$opcao = 3;
echo '<h1 style="color: burgundy;">NETFLIX</h1</br>';
echo "1-Assistir filme <br>";
echo "2-Assistir série <br>";
echo "3-Ver minha listas <br>";
echo "4-Sair <br><br>";

switch($opcao) {
    case 1:
        echo "Abrir filmes.";
        break;
    case 2:
        echo "Abrir séries.";
    break;
    case 3:
        echo "Abrir minha lista.";
    break;
    case 4:
        echo "Você escolheu: Sair.";
    default:
        echo "Opção inválida!";
}