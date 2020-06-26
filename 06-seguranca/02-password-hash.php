<?php

// Atribuindo valor a variável senha
$senha = "123456";

// Atribuindo o valor da nova senha com a função password_hash
// e utilizando o algoritmo bcrypt
// Gera um hash de 60 caracteres, mas pode ser que gere um hash com
// mais caracteres
$options = [
    'cost' => 10 // O padrão é 10.
    // Quanto maior o custo, mais seguro é, porém,
    // mais recursos consome da máquina
];
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);

// Imprimindo a senha segura
echo $senhaSegura;

echo '<hr>';

// Guardando o hash obtido simulando uma senha salva no banco de dados
$senha_db = '$2y$10$BcL7a.ItxhEQUFmGY3e.3.Rh2vqy5HQ7LcPSi/HNUxkUdM8g1H8zq';

// Verificando a validade da senha
if ( password_verify($senha, $senha_db) ) :
    echo "Senha válida";
else :
    echo "Senha inválida";
endif;