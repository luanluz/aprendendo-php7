<?php

/*
    ---------- Funções para números ----------
*/

// number_format
// Função para formatar a apresentação de um número
// Atribuindo um valor float a variável
$preco = 1234.5678;
// Recebe como primeiro parâmetro o número que será formatado,
// o segundo serão as casas decimais após a vírgula,
// o terceiro será o separador decimal, e por último o
// separador de milhares
echo number_format($preco, 2, ",", ".");

echo "<hr>";

// round
// Função para arrendondar valores
echo round(2.6);
echo '<br>';
echo round(2.4);

echo "<hr>";

// ceil
// Função que ignora a regra matemática e arrendonda
// pra cima, independente do valor após a vírgula ser
// abaixo de 5
echo ceil(6.1);

echo "<hr>";

// floor
// Função que ignora a regra matemática e arrendonda
// pra baixo, independente do valor após a vírgula ser
// acima de 5
echo floor(6.99);

echo "<hr>";

// rand
// Função que retorna números pseudo aleatórios
// obedecendo um intervalo informado
echo rand(1,25);