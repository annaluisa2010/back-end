<?php

$senhacorreto= "1234";
$senha= "1111";
$tentativas = 0;

while ($tentativas < 3) {
    $tentativas++;

    if ($senha == $senhacorreto) {
        echo "Senha correta! Acesso permitido.";
        break;
    } else {
    echo "Senha incorreta. Tente novamente.<br>";
}
}