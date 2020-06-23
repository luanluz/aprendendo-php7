<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <?php
        // Validações de dados vindos atráves do método POST

        if(isset($_POST['enviar-formulario'])):
            $erros = array();

            // Sanitize
            // Limpar os caracteres especias
            $nome = filter_input(
                INPUT_POST,
                'nome',
                FILTER_SANITIZE_SPECIAL_CHARS
            );


            // Deixar somente os números do tipo inteiro
            $idade = filter_input(
                INPUT_POST,
                'idade',
                FILTER_SANITIZE_NUMBER_INT
            );

            if(!filter_var($idade, FILTER_VALIDATE_INT))
                $erros[] = "Idade precisa ser um inteiro";


            // Deixa somente os caracteres válidos de email
            $email = filter_input(
                INPUT_POST,
                'email',
                FILTER_SANITIZE_EMAIL
            );

            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                $erros[] = "E-mail precisa ter um endereço válido";


            // Deixa somente os caracteres válidos de url
            $url = filter_input(
                INPUT_POST,
                'url',
                FILTER_SANITIZE_URL
            );

            if(!filter_var($url, FILTER_VALIDATE_URL))
                $erros[] = "URL precisa ter um endereço válido";



            if(!empty($erros)):
                foreach( $erros as $erro )
                    echo "<li> $erro </li>";
                echo '<br>';
            else:
                echo 'Todos os dados são válidos!<br><br>';
            endif;

        endif;
    ?>

    <!-- Formulário para obter os dados -->
    <!-- em action é enviado os dados para o script correspondente -->
    <form method="POST">
        <label for="nome">
            Nome:
            <!-- entrada do nome -->
            <input type="text" name="nome" id="nome">
        </label>
        <br>
        <label for="idade">
            Idade:
            <!-- entrada da idade -->
            <input type="text" name="idade" id="idade">
        </label>
        <br>
        <label for="email">
            E-mail:
            <!-- entrada do email -->
            <input type="text" name="email" id="email">
        </label>
        <br>
        <label for="url">
            URL:
            <!-- entrada da url -->
            <input type="text" name="url" id="url">
        </label>
        <br>
        <!-- botão que submete os dados -->
        <input type="submit" name="enviar-formulario" value="Enviar">
    </form>
</body>
</html>