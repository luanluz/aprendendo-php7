<?php

/*
    ---------- Funções para strings ----------
*/

// strtoupper
// Função para deixar todas as letras
// em caixa alta
// Atribuindo um valor do tipo string à
// variável nome
$nome = "Luan Luz";

// Imprimindo o nome em caixa alta
echo strtoupper($nome);

echo '<br>';

// strtolowe
// Função para deixar todas as letras
// em caixa baixa
echo strtolower($nome);

echo "<hr>";

// substr
// Retorna um novo valor da string inicial
// a partir da posição de um caracter
$mensagem = "Olá mundo";
// Recebe a string e onde começará a nova string
echo substr($mensagem, 4);
echo '<br>';
// Podemos delimitar ainda mais adicionando no último
// parâmetro o tamanho que a nova string deverá
// ter, ou seja, o máximo de caracteres a partir do
// caracter indicado no primeiro parâmetro
echo substr($mensagem, 4, 3);

echo "<hr>";

// str_pad
// Complementa uma string com caracteres utilizando uma
// quantidade definida de caracteres
$objeto = "mouse";
// Recebe a string, o tamanho da nova string, e a posição
// que será inserido os caracteres
echo str_pad($objeto, 10, '*', STR_PAD_BOTH);

