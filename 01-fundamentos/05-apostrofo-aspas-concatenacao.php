<?php

// Atribuindo um valor a variavel
$nome = 'Luan Luz';

// Apóstrofo
// Apóstrofo é literal,
// tudo que está dentro dela não
// é interpretado
echo 'Meu nome é $nome <br>';

// Aspas
// São interpretativas
echo "Meu nome é $nome <br>";

// Concatenando
echo 'Meu nome é '. $nome . '<br>';

// Escapando o apóstrofo
echo 'E minha idade é \'19\' <br>';
// Escapando as aspas
echo "Meu nome é \"$nome\"";