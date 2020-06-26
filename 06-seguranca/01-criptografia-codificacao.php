<?php

// Atribuindo valor a variável senha
$senha = "123456";

// Base64 - criptografia de mão dupla
// conseguimos codificar e descodificar
echo "Senha: ". $senha ." <br> ".
    "base64: ". base64_encode($senha);

echo '<hr>';

// Md5 e Sha1 - criptografias de mão única
// só conseguimos codificar
echo "Md5: ". md5($senha) ."<br>"; // Retorna sempre um hash de 32 caracteres
echo "Sha1> ". sha1($senha);