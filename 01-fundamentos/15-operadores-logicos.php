<?php

/*
    ---------- Operadores de lógicos ----------
*/

$idade = 19;
$nome = "Luan";

// E
// Retorna verdadeiro somente se as duas expressões
// forem verdadeiras
// &&
echo $idade == 19 && $nome == "Luan" ? "Verdadeiro <br>" : "Falso <br>";
// and
echo $idade == 19 and $nome == "Bruno" ? "Verdadeiro <br>" : "Falso <br>";
echo '<br><br>';

// Ou
// Retorna verdadeiro se uma ou outra expressão ou as duas
// forem verdadeiras
// ||
echo $idade == 19 || $nome == "Bruno" ? "Verdadeiro <br>" : "Falso <br>";
// or
echo $idade == 20 or $nome == "Luan" ? "Verdadeiro <br>" : "Falso <br>";
echo '<br><br>';

// Ou exclusivo
// xor
// Retorna verdadeiro somente se uma das expressões for
// verdadeiras
echo var_dump($idade == 19 xor $nome == "Bruno") .'<br>';
echo var_dump($idade == 19 xor $nome == "Luan") .'<br>';
echo '<br><br>';

// Negação
// Retorna verdadeiro se a expressão for false e vice e versa
// !
echo !($idade == 19) ? "Verdadeiro <br>" : "Falso <br>";
echo !($idade != 19) ? "Verdadeiro <br>" : "Falso <br>";