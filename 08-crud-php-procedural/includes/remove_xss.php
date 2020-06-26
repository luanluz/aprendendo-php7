<?php

// Exigindo a conexão com o banco de dados
require_once '../php_action/db_connect.php';

// Função para limpar o campo
function clear($input) {
    // Obtendo valor da variável global
    global $connect;

    // sql
    $var = mysqli_escape_string($connect, $input);

    // xss
    return htmlspecialchars($var);
}