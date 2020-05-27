<?php

/*
    ---------- Operadores aritméticos ----------
*/

// Atribuindo valores correspondentes aos nomes
// das variáveis
$numero_dez = 10;
$numero_cinco = 5;
$numero_quinze = 15;
$numero_tres = 3;

// Adição +
// Atribuindo o valor da soma na variável
$adicao = $numero_dez + $numero_dez;
echo $adicao;
echo '<br>';

// Subtração -
// Atribuindo o valor da subtração na variável
$subtracao = $numero_quinze - $numero_cinco;
echo $subtracao;
echo '<br>';

// Multiplicação *
// Atribuindo o valor da multiplicação na variável
$multiplicacao = $numero_tres * $numero_cinco;
echo $multiplicacao;
echo '<br>';

// Divisão /
// Atribuindo o valor da divisão na variável
$divisao = $numero_quinze / $numero_cinco;
echo $divisao;
echo '<br>';

// Módulo %
// Atribuindo o valor do resto da divisão na variável
$modulo = $numero_quinze % $numero_cinco;
echo $modulo;
echo '<br>';

// Exponenciação
// Atribuindo o valor do resultado a exponenciação na variável
$exponenciacao = $numero_tres ** $numero_cinco;
echo $exponenciacao;
echo '<br>';

// Prioridades
// Demonstrando como funciona a prioridade de cálculo
echo (($numero_dez + $numero_cinco ) / $numero_quinze) * $numero_tres;