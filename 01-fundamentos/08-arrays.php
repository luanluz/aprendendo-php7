<?php

/*
    ---------- Arrays numéricos ----------
*/
// Atribuindo elmentos nos array e alterando a ordem
// do segundo elemento em diante
$carros = array( 'Gol', 2 => 'Uno', 'Fusca' );
// Exibindo o array
print_r( $carros );

// Exibindo um elemento numa posição específica
echo $carros[0].'<br>';

// Adicionando um elemento na próxima posição
$carros[] = 'Golf';

// Adicionando um elemtno numa posição específica
$carros[10] = 'Corsa';
// Exibindo o elemento adicionado
echo $carros[10] .'<br>';

// Exibindo o array
print_r( $carros );

echo '<hr>';

// Exibindo o número total de elemtnos no array carros
echo 'Número total de carros: ' .count( $carros );

echo '<hr>';

// Percorrendo o array de carros
// e exibindo os valores existentes
foreach( $carros as $carro )
    echo $carro . '<br>';


echo '<hr>';


/*
    ---------- Arrays associativos ----------
*/
// Definindo um array e dentro dele associando
// cada valor com uma chave
$pessoa = array( "nome" => "Luan", "idade" => 19, "altura" => 1.65 );
// Adicionando uma nova chave com um valor
$pessoa["cidade"] = "Palmas";

// Percorrendo o array de pessoas 
// e exibindo os valores formatados
foreach( $pessoa as $indice => $valor )
    echo $indice .': '. $valor .'<br>';


echo '<hr>';


/*
    ---------- Arrays multidimensionais ----------
*/
// Definindo um array multidimensional de times
// com seus respectivos estados e posições
$times = array( 
    "cariocas" => array(
        "primeiro" => "flamengo",
        "segundo" => "vasco",
        "terceiro" => "fluminense" ),
    "paulistas" => array(
        "primeiro" => "sao paulo",
        "segundo" => "santos",
        "terceiro" => "palmeiras" ),
    "baianos" => array(
        "primeiro" => "bahia",
        "segundo" => "vitoria",
        "terceiro" => "itabuna"
    )
);

// Exibindo o valor da primeira chave de estados
// que está dentro da primeira chave de times
echo $times["cariocas"]["primeiro"]. '<br>';
echo '<br>';

// Percorrendo o array de 'estados'
// dentro do array de times e exibindo
// os valores existentes
foreach( $times["cariocas"] as $indice => $valor )
    echo $indice .': '. $valor .'<br>';

echo '<br>';

// Exercício
// Exibir todos os valores de todas as chaves
foreach( $times as $estados => $time ) {
    echo $estados .'<br>';
    foreach( $time as $posicao => $valor )
        echo $posicao .': '. $valor. '<br>';

    echo '<br>';
}
