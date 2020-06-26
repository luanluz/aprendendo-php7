<?php


// Utilizando a função date para exibir data

// Definindo timezone
date_default_timezone_set('America/Araguaina');

// Formatos de dia
echo "Dia: <br>";
echo date('d') .'<br>';
echo date('D') .'<br>';
echo date('l') .'<br>';

echo "<hr>";

// Formatos de mês
echo "Mês: <br>";
echo date('m') .'<br>';
echo date('M') .'<br>';

echo "<hr>";

// Formatos de ano
echo "Ano: <br>";
echo date('y') .'<br>';
echo date('Y') .'<br>';

echo "<hr>";

// Juntando os formatos
echo date('d/m/Y') .'<br>';
echo date('d/m/Y h:i:s A') .'<br>';
echo date('d/m/Y H:i:s') .'<br>';

echo "<hr>";

// Formato para banco de dados
echo date('Y-m-d'); // date
echo '<br>';
echo date('Y-m-d H:i:s'); // datetime
echo '<br>';
echo date('d/m/Y', time()); // UNIX timestamp
echo '<br>';
echo date('d/m - h:i', mktime(20, 40, 00, 06, 26, 2020)); // mktime
echo '<br>';
echo date('d/m/y',strtotime('2020-06-26 20:40:00')); // strtotime