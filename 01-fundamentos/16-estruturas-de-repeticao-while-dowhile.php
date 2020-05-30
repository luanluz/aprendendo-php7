<?php

/*
    ---------- Estruturas de repetição ----------
*/

// while
// É executado um trecho de código somente enquanto
// o valor for verdadeiro, caso contrário,
// não entrará ou não prosseguirá no loop
// Atribuindo um valor inical ao contador 
$contador = 1;
while( $contador <= 10):
    // Imprimindo o valor atual do contador
    echo "Contador é $contador <br>";
    // Incrementando mais um sempre
    // que a instrução for executada
    $contador++;
endwhile;

echo '<br><br>';

// do while
// Diferente da estrutura 'while', o 'do while'
// sempre executará a instrução na primeira vez
// em que for lido pelo PHP, e então, a partir da
// segunda vez só será executado se satisfazer a
// condição
// Atribuindo um valor inical ao contador, novamente
$contador = 1;
do {
    // Imprimindo o valor atual do contador
    echo "Contador é $contador <br>";
    // Incrementando mais um sempre
    // que a instrução for executada
    $contador++;
} while( $contador <= 10);