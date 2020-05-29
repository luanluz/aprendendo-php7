<?php

/*
    ---------- Operadores de lógicos ----------
*/

$idade = 19;
$nome = "Luan";

// E
// &&
// Retorna verdadeiro somente se as duas expressões
// forem verdadeiras
echo $idade == 19 && $nome == "Luan" ? "Verdadeiro" : "Falso";
// and
echo $idade == 19 and $nome == "Bruno" ? "Verdadeiro" : "Falso";


// Ou
// Retorna verdadeiro se uma ou outra expressão ou as duas
// forem verdadeiras
// &&
echo $idade == 19 || $nome == "Bruno" ? "Verdadeiro" : "Falso";
// and
echo $idade == 20 or $nome == "Luan" ? "Verdadeiro" : "Falso";


// Ou exclusivo
// xor
// Retorna verdadeiro somente se uma das expressões for
// verdadeiras
echo $idade == 19 xor $nome == "Bruno" ? "Verdadeiro" : "Falso";
// and
echo $idade == 19 xor $nome == "Luan" ? "Verdadeiro" : "Falso";

// Negação
// Retorna verdadeiro se a expressão for false e vice e versa
// !
echo !($idade == 19) && $nome == "Bruno" ? "Verdadeiro" : "Falso";
// and
echo !($idade == 19) and $nome == "Luan" ? "Verdadeiro" : "Falso";