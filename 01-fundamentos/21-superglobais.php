<?php

/*
    ---------- Variáveis Superglobais ----------
*/

// GLOBALS
// Armazena todas as variáveis em um array
// para ser acessadas em qualquer escopo de scripts
// PHP
// Adicionando valores referentes ao nome das variáveis
$numeroDez = 10;
$numeroQuinze = 15;

// Função que imprime a soma de duas variáveis
function soma()
{
    // Utilizando da superglobal para acessar as
    // variáveis que não estão no mesmo escopo
    // e somá-las
    echo $GLOBALS['numeroDez'] + $GLOBALS['numeroQuinze'];
}
// Chamando a função
soma();


// SERVER
// Contém informações sobre cabeçalhos, caminhos e
// locais de script dentro de um array
// Retorna o nome do arquivo do script executado
echo $_SERVER['PHP_SELF'].'<br>';
// Exemplos de informações a serem obtidas através
// dessa superglobal
echo $_SERVER['SERVER_NAME'].'<br>';
echo $_SERVER['SCRIPT_FILENAME'].'<br>';
echo $_SERVER['DOCUMENT_ROOT'].'<br>';
echo $_SERVER['SERVER_PORT'].'<br>';
echo $_SERVER['REMOTE_ADDR'].'<br>';