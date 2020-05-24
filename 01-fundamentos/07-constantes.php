<?php

// Constantes
// Por convenção são definidas
// com letras maiúsculas
define("NOME", "Luan Luz");
define("IDADE", 19);
define("ALTURA", 1.65);
define("CIDADES", ['Palmas', 'Porto Nacional', 'Rio de Janeiro' ]);

// Exibindo os tipos das constantes
var_dump(NOME);
echo '<br>';
var_dump(IDADE);
echo '<br>';
var_dump(ALTURA);
echo '<br>';
var_dump(CIDADES);
echo '<hr>';

// Exibindo a concatenação das constantes
echo 'Meu nome é '. NOME .', tenho '. IDADE .
' anos, minha altura é de '. ALTURA . ' e moro em '.
CIDADES[0];

echo '<hr>';

// Declarando uma função para exibir nomes
function exibeNome() {
    // As constantes são automaticamente globais
    echo NOME;
}

// Chamando a função
exibeNome();