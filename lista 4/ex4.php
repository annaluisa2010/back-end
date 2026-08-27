<?php

$email = "jp@gmail.com";
$senha = "1234";
$status = "desativado";

echo "Bem Vindo ao FACEBOOK <br>";

if($email == "jp@gmail.com" && $senha == "1234" && $status == "ativa"){
    echo "Acesso Liberado 👍 <br>";
    header("Location: https://www.facebook.com");
}
else{
    echo "Email ou Senha inválido!";
}