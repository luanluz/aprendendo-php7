<?php

// Variáveis de conexão com o banco de dados
$servername = 'mysql';
$username = 'root';
$password = 'root';
$db_name = 'sistema_login';

// Conectando no banco de dados utilizando
// a função mysqli_connect e as variáveis
// com as credenciais e informações do banco
$connect = mysqli_connect(
    $servername,
    $username,
    $password,
    $db_name
);

if(mysqli_connect_error()):
    echo "Falha ao conectar: ". mysqli_connect_error();
endif;