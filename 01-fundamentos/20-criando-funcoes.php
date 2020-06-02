<?php

/*
    ---------- Criando funções ----------
*/

// Declarando uma função
// Palavra reservada 'function'
// e logo após o nome da função,
// ou como ela será chamada e, se for
// necessário, informa que a função receberá
// parâmetros
function exibirNome($nome)
{
    echo "Meu nome é $nome.";
}

// Chamando a função declarada acima
// e informando o parâmetro esperado
exibirNome("Luan Luz");

echo '<hr>';

// Declarando uma função para calcular média
function calcularMedia($nome, $notaPrimeiraProva, $notaSegundaProva)
{
    // Atribuindo a média de duas notas a uma variável
    $media = ( $notaPrimeiraProva + $notaSegundaProva ) / 2;

    // Imprimindo a situação do aluno de acordo com resultado
    echo $media >= 7 ? "$nome foi aprovado com média: ". round($media, 2)."." :
        "$nome foi reprovado com média: ". round($media, 2).".";
}

// Chamando a função que calcula a média e mostra o resultado do aluno
calcularMedia("Luan", 7.25, 8.70);
echo '<br>';
calcularMedia("Bruno", 9.5, 6.8);