<?php

// Funções principais de arrays

// Declando um array com chaves
$nomes = array(
    "primeiro" => "Luan",
    "segundo" => "Bruno",
    "terceiro" => "Alvaro",
    "quarto" => "Luiz"
);

// Imprimindo o array de nomes
print_r($nomes);

echo '<hr>';

// Verifica se é um array e retorna true ou false
echo is_array($nomes) == true ? "sim" : "não";

echo '<hr>';

// Verifica se há um elemento no array
// e retorna true ou false
echo in_array("Luan", $nomes) ? "tem" : "não tem";

echo '<hr>';

// Retorna um novo array tendo como os valores as
// chaves de outro array
$chaves = array_keys($nomes);
print_r($chaves);

echo '<hr>';

// Retorna um novo array tendo os mesmo elementos
// do outro array
$valores = array_values($nomes);
print_r($valores);

echo '<hr>';

// Declarando array de carros e motos
$carros = array( 'Gol', 'Uno', 'Fusca');
$motos = array( 'Fazer 150', 'Biz', 'CG Titan');

// Retorna um array com a junção de outros dois array
$veiculos = array_merge($carros, $motos);
print_r($veiculos);

echo '<hr>';

// Exclui o elemento da última posição do array e retorna o
// elemento excluído
print_r($carros);
echo '<br>';
echo array_pop($carros);
echo '<br>';
print_r($carros);

echo '<hr>';

// Exclui o elemento da primeira posição do array e retorna o
// elemento excluído
print_r($carros);
echo '<br>';
echo array_shift($carros);
echo '<br>';
print_r($carros);

echo '<hr>';

// Adiciona elementos no final do array
$frutas = array("Uva", "Laranja", "Banana");
print_r($frutas);
echo '<br>';
array_push($frutas, "Melancia");
print_r($frutas);

echo '<hr>';

// Adiciona elementos no início do array
print_r($frutas);
echo '<br>';
array_unshift($frutas, "Manga", "Morango", "Maçã");
print_r($frutas);

echo '<hr>';

// Mescla dois array e retorna o novo array
$chave = array("primeiro", "segundo", "terceiro");
$valor = array("flamengo", "vasco", "fluminense");

$times = array_combine($chave, $valor);
print_r($times);

echo '<hr>';

// Retorna a soma dos elementos do array
$soma = array(3, 5, 7);
echo array_sum($soma);

echo '<hr>';

// Transforma uma string em array e retorna
// o novo array
$data = "24/05/2020";
print_r(explode('/', $data));

echo '<br>';

$nome = "Luan Bruno Alves Luz";
print_r(explode(' ', $nome));

echo '<hr>';

// Transforma array em uma string e retorna
// a string
echo implode(', ', $valor);