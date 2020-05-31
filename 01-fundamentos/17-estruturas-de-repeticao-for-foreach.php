<?php

/*
    ---------- Estruturas de repetição ----------
*/

// for
// É utilizando quando se sabe o valor máximo de
// repetições
// Atribuindo o valor inicial, a condição e a incrementação
// ou decrementação
for ( $contador = 0; $contador <= 10; $contador++ ):
    echo "7 x $contador = ". 7 * $contador .'<br>';
endfor;

echo '<hr>';

// foreach
// É utilizado para percorrer arrays
// Atribuindo valores no array de cores
$cores = array("verde", "vermelho", "azul");

// Percorrendo todos os índices do array que contém
// valor
foreach ($cores as $cor):
    echo $cor .'<br>';
endforeach;

echo '<br>';

// Mostrando os índices no foreach
foreach ($cores as $indice => $cor):
    echo 'A cor no índice '. $indice .' é: '. $cor .'<br>';
endforeach;