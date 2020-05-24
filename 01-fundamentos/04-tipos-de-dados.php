<?php

/*
    ---------- Escalares ----------
*/

// string
// Atribuindo um valor do tipo string
$dado_string = "Olá, mundo!";
//$dado_string = "123";
//$dado_string = 123;
// Mostrando o tipo de dado da variável
var_dump($dado_string);

// Se a variável for do tipo inteiro
// será exibindo uma informação
// Caso contrário, será exibido outro valor
if(is_string($dado_string)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;


echo "<br>";


// int
// Atribuindo um valor do tipo inteiro a uma
// variável
$dado_int = 19;
//$dado_int = 19.5;
var_dump($dado_int);

if(is_int($dado_int)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;


echo "<br>";


// float
// Atribuindo um valor do tipo float a uma
// variável
$dado_float = 2.5;
var_dump($dado_float);

if(is_float($dado_float)):
    echo "É um float";
else:
    echo "Não é um float";
endif;


echo "<br>";


// boolean
// Atribuindo um valor do tipo boolena a uma
// variável
$dado_boolean = true;
$dado_boolean = false;
var_dump($dado_boolean);

if(is_bool($dado_boolean)):
    echo "É um booleano";
else:
    echo "Não é um booleano";
endif;


echo "<hr>";


/*
    ---------- Compostos ----------
*/

// array
// Atribuindo valorres em um array
$dado_array = array("Gol", "Uno", "Fusca", 1, 2.5, true);
var_dump($dado_array);

if(is_array($dado_array)):
    echo "É um array";
else:
    echo "Não é um array";
endif;


echo "<br>";


// object
// Criando um classe com o atributo nome e
// um métedo atribuirNome
class Objeto
{
    public $nome;

    public function atribuirNome($nome)
    {
        $this->nome = $nome;
    }
}

// Instanciando um objeto do tipo Objeto
$objeto = new Objeto();
// Utilizando o atributo para setar um nome
$objeto->atribuirNome("Luan");
var_dump($objeto);

if(is_object($objeto)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;


echo "<hr>";


/*
    ---------- Especiais ----------
*/

// NULL
$dado_null = NULL;
var_dump($dado_null);

// Resource