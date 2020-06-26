<?php
// Encerrando a sessão

// Iniciando a sessão
session_start();
// Limpa sessão
session_unset();
// Destrói sessão
session_destroy();

// Redirecionando o usuário para o index.php
header('Location: index.php');