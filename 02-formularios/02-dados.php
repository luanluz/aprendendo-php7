<?php

// Obtendo os valores submetidos através
// da superglobal POST
$nome = $_POST['nome'];
$email = $_POST['email'];

// Imprimindo os valores submetidos pelo usuário
echo "Seu nome é $nome e seu e-mail é: $email.";

echo '<br>';

// Imprimindo os valores que têm no array
// da superglobal POST
print_r($_POST);

echo '<hr>';


// Obtendo os valores submetidos através
// da superglobal GET
$nome = $_GET['nome'];
$email = $_GET['email'];

// Imprimindo os valores submetidos pelo usuário
echo "Seu nome é $nome e seu e-mail é: $email.";

echo '<br>';

// Imprimindo os valores que têm no array
// da superglobal GET
print_r($_GET);