<?php

// Manipulação de arquivos


// Atribuindo o nome do arquivo em uma
// variável
$arquivo = 'arquivo.txt';
// Conteúdo que será escrito no arquivo
$conteudo = date('d/m/Y H:i:s')."\r\n";

// Utilizando a função fopen para
// poder escrever ou ler o arquivo.
// Recebe a referência do arquivo e
// o modo que ela será aberto

// Modos:
// a  - abre para leitura.
// a+ - abre para escrita e leitura.
// O ponteiro é posicionado no fim
// do arquivo. Se não existir, tenta criar

// r  - abre para leitura.
// r+ - abre para leitura e escrita.
// O ponteiro é posicionado no começo do
// arquivo

// w  - abre para escrita.
// w+ - abre para leitura e escrita.
// O ponteiro posicionado  começo e reduz
// o comprimento do arquivo para zero.
// Se não existir, tenta criar

// x  - Cria e abre o arquivo para escrita.
// x+ - Cria e abre o arquivo para leitura e escrita.
// O poneiro é posicionado no começo do arquivo.
// Se o arquivo já existir, a chamada a fopen() falhará,
// retornando FALSE e gerando um erro de nível E_WARNING.
// Se não existir, tenta criar
$arquivoAberto = fopen($arquivo, 'a');

// fwrite escreve no arquivo aberto
// Recebe o arquivo e o conteúdo que será
// escrito
fwrite($arquivoAberto, $conteudo);

// fclose fecha o arquivo aberto
// Recebe o arquivo
fclose($arquivoAberto);

$arquivoLeitura = fopen($arquivo, 'r');

// Utilizando a função feof para percorrer
// até o final do arquivo
while(!feof($arquivoLeitura)):
    // fgets pega o conteúdo de cada linha e coloca
    // dentro de um variável
    // filesize pega o tamanho total do arquivo
    $linha = fgets($arquivoLeitura, filesize($arquivo));
    echo $linha .'<br>';
endwhile;

fclose($arquivoLeitura);