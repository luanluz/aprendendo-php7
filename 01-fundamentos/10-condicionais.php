<?php

/*
    ---------- Condicionais ----------
*/

// if
// Atribuindo valor 10 a variável numero
$numero = 10;

// Comparando o número 10 a variável
if ( $numero == 10 ):
    // Imprime só se for igual a variável
    echo "É igual a 10 <br>";
endif;



// else
// Atribuindo valor 5 a variável numero
$numero = 5;

// Se o valor da variável for igual
// a dez imprimirá uma mensagem
if ( $numero == 10 ):
    echo "É igual a 10 <br>";
// Caso contrário, imprimirá outro
else:
    echo "É diferente de 10 <br>";
endif;



// elseif
// Atribuindo valor 15 a variável numero
$numero = 15;

// Se o conteúdo da variável for igual a 10
// imprimirá uma mensagem
if ( $numero == 10 ):
    echo "É igual a 10 <br>";
// Se não se o conteúdo for igual ou menor a 5
// imprimirá uma mensagem com informação diferente
elseif ( $numero <= 5 ):
    echo "É igual ou menor a 5 <br>";
// Se não satisfazer nenhuma condição acima
// imprimirá uma mensagem com informação diferente
else:
    echo "É maior que 5, diferente de 5 e diferente de 10 <br>";
endif;



// Operador ternário
// Atribuindo o valor 20 a variável número
$numero = 20;

// Forma reduzida de fazer a condição if else
echo ($numero >= 25 ) ?
    "O número é maior ou igual a 25 <br>" :
    "O número é menor que 25 <br>";



// switch case
// Atribuindo o valor azul a variável cor
$cor = "azul";

// Utilizando o operador switch
// para alternar entre n condições
// ou entrar em uma condição padrão
// caso o valor não tenha sido esperado
switch ( $cor ):
    case "verde":
        echo "Cor verde <br>";
    break;

    case "azul":
        echo "Cor azul <br>";
    break;
    
    case "amarelo":
        echo "Cor amarela <br>";
    break;

    default:
        echo "A cor não é verde, azul e nem amarela <br>";
endswitch;