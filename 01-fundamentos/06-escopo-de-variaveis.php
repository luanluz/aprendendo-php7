<?php

// Definindo variável em escopo global
$nome = "Luan Luz";

// Declarando uma função para exibir nome
function exibeNome()
{
    // obtendo a variável global
    global $nome;
    // exbindo o valor da variável
    echo $nome;
}

// Chamando a função
exibeNome();

echo "<hr>";

// Declarando uma função para exibir cidade
function exibeCidade()
{
    // Defindo variável no escopo local
    //$cidade = "Palmas";
    // Definindo variável local em global
    global $cidade;
    echo $cidade = "Palmas";
}

// Chamando a função
exibeCidade();

echo "<hr>";

$num1 = 3;
$num2 = 5;
$num3 = 7;
// Declarando uma função para somar
function soma()
{
    echo $GLOBALS['num1'] + $GLOBALS['num2'] + $GLOBALS['num3'];
}

// Chamando a função
soma();