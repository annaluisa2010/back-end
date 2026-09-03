<?php

function verificarIdade($idade)
{
    if ($idade >= 18) {
        return "Maior de idade. Pode tirar carta<br>";
    } else {
        return "Menor de idade. Só Uber rs<br><br>";
    }
}

echo verificarIdade(17);
echo verificarIdade(44);
echo verificarIdade(15);
echo verificarIdade(18);