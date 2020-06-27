<?php

// Expressões regulares
// Define um padrão a ser usado para procurar, substituir
// palavras ou grupos de palavras.

// ^ define o início de expressão
// $ define o final da expressão
// /i define case sensitive
// [] define um conjunto de caracteres
// {} define ocorrências, como: ?{0,1} *{0,} +{1,}

// Validando um e-mail com regex
$email = "contato@email.com";

// Atribuindo um padrão de expressão regular para validar
// um e-mail
$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";

// Verifica se deu match
if ( preg_match( $padrao, $email )):
    echo "E-mail válido.";
    echo "<hr>";
    echo $email;
else :
    echo "E-mail inválido";
    echo "<hr>";
endif;