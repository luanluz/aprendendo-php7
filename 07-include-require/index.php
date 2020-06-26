<?php
    /* Não dá erro na execução, continua o script
        se não houver o arquivo para incluir */
    // include 'header.php'

    /* Dá erro na execução caso não tenha
        o arquivo que está exigindo */
    // require 'header.php'

    /* Inclui ou exige o conteúdo de outro arquivo uma
        única vez mesmo que tenha sido declarado mais
        de uma vez */
    // include_once 'header.php'
    // require_once 'header.php'

    // Utilizando o include_once no arquivo que tem
    // o conteúdo do cabeçalho
    include_once 'header.php'
?>

    <main>
        <?php echo "Olá, mundo!" ?>
    </main>

<?php include_once 'footer.php' ?>