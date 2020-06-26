<?php

// Conexão com o banco de dados

// Variáveis de conexão com o banco de dados
$servername = 'mysql';
$username = 'root';
$password = 'root';
$db_name = 'crud_php_procedural';

// Conectando no banco de dados utilizando
// a função mysqli_connect e as variáveis
// com as credenciais e informações do banco
$connect = mysqli_connect(
    $servername,
    $username,
    $password,
    $db_name
);

mysqli_set_charset($connect, "utf8");

if ( mysqli_connect_error() ) :
    echo "Falha ao conectar: ". mysqli_connect_error();
endif;