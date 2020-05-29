<?php

/*
    ---------- Operadores de comparação ----------
*/

// ==  Operador de igualdade
// Comparando se os valores são iguais
if ( 10 == "10"):
    echo "Iguais <br>";
else:
    echo "Diferentes <br>";
endif;

// !=  Operador de não igualdade
// Comparando se os valores não são iguais
if ( 10 != 11):
    echo "Não são iguais <br>";
else:
    echo "São iguais <br>";
endif;

// ===  Operador de identidade
// Comparando se os valores e os tipos dos
// valores são iguais
if ( 10 === "10"):
    echo "São idênticos <br>";
else:
    echo "Não são idênticos <br>";
endif;

// !==  Operador de não de identidade
// Comparando se os valores e os tipos dos
// valores não são idênticos
if ( 10 !== 10):
    echo "Não são idênticos <br>";
else:
    echo "São idênticos <br>";
endif;

// <>  Operador de diferença
// Comparando se os valores são diferentes
if ( 10 <> 11):
    echo "São diferentes <br>";
else:
    echo "Não são diferentes <br>";
endif;

// <  Operador menor que
// Comparando se um valor é menor que o outro
if ( 10 < 11):
    echo "É menor <br>";
else:
    echo "Não é menor <br>";
endif;

// >  Operador maior que
// Comparando se um valor é maior que o outro
if ( 10 > 9):
    echo "É maior <br>";
else:
    echo "Não é maior <br>";
endif;

// <=  Operador menor ou igual
// Comparando se um valor é menor que o outro
if ( 10 <= 10):
    echo "É menor ou igual <br>";
else:
    echo "Não é menor e nem igual <br>";
endif;

// >=  Operador maior ou igual
// Comparando se um valor é maior que o outro
if ( 10 >= 9):
    echo "É maior ou igual <br>";
else:
    echo "Não é maior e nem igual <br>";
endif;


// <=>  Operador spaceship
// Comparando se um valor é maior, igual ou menor
// que o outro
// Como o primeiro valor é menor, retornará -1
echo var_dump(10 <=> 11) .'<br>';
// Como os dois valores são iguais, retornará 0
echo var_dump(10 <=> 10) .'<br>';
// Como o primeiro valor é maior, retornará 1
echo var_dump(10 <=> 9) .'<br>';