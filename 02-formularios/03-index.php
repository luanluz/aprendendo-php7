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

            if(!filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
                $erros[] = "Idade precisa ser um inteiro";
            endif;

            if(!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
                $erros[] = "E-mail precisa ter um endereço válido";
            endif;

            if(!filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
                $erros[] = "Peso precisa ser um decimal";
            endif;

            if(!filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
                $erros[] = "IP precisa ter um endereço válido";
            endif;

            if(!filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
                $erros[] = "URL precisa ter um endereço válido";
            endif;

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
        <label for="peso">
            Peso:
            <!-- entrada do peso -->
            <input type="text" name="peso" id="peso">
        </label>
        <br>
        <label for="ip">
            IP:
            <!-- entrada do ip -->
            <input type="text" name="ip" id="ip">
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