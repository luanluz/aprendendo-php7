<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
</head>
<body>
    <?php
        // Obtendo a conexão com o banco de dados
        require_once 'db_connect.php';

        // Iniciando sessão
        session_start();

        // Verificando se o formulário foi submetido
        if(isset($_POST['enviar-formulario'])):
            // Criando um array de erros
            $erros = array();

            // Obtendo o valor de login e senha.
            // E filtrando através da função mysqli
            $login = mysqli_escape_string($connect, $_POST['login']);
            $senha = mysqli_escape_string($connect, $_POST['senha']);

            // Verificando se os dados que foram submetidos estão vazios
            if(empty($login) or empty($senha)):

                // Adicionando erro ao array
                $erros[] = '<li> O campo login e senha precisam ser preenchidos.</li>';
            else:

                // Fazendo uma pesquisa no banco de dados verificando se há
                // um usuário correspondente
                $sql = "SELECT login FROM usuarios WHERE login = '$login'";
                $resultado = mysqli_query($connect, $sql);

                // Verificando se retorno algum dado
                if(mysqli_num_rows($resultado) > 0):
                    // Criptografando a senha com md5
                    $senha = md5($senha);
                    // Montando uma pesquisa no banco com o login e a senha
                    $sql =
                        "SELECT * FROM usuarios
                        WHERE login = '$login'
                        AND senha = '$senha'";

                    // Obtendo o resultado da pesquisa
                    $resultado = mysqli_query($connect, $sql);

                    // Verificando retornou dados
                    if(mysqli_num_rows($resultado) == 1 ):
                        // Transformando os dados obtidos em array
                        $dados = mysqli_fetch_array($resultado);

                        // Fechando a conexão
                        mysqli_close($connect);

                        // Atribuindo valores na sessão
                        $_SESSION['logado'] = true;
                        $_SESSION['id_usuario'] = $dados['id'];

                        // Redirecionando para a página restrita
                        header('Location: home.php');
                    else:
                        // Adicionando erro ao array
                        $erros[] = '<li> Usuário e senha não conferem. </li>';
                    endif;

                else:
                    // Adicionando erro ao array
                    $erros[] = '<li> Usuário não existe.</li>';
                endif;

            endif;
        endif;
    ?>
    <!-- Formulário para obter os dados -->
    <div style="
        border-bottom: solid 1px rgba(0, 0, 0, 0.25);
        margin-bottom: 25px;
        padding-bottom: 10px;
    ">
        <h1>Login</h1>
        <?php
            if(!empty($erros)):
                foreach($erros as $erro):
                    echo $erro;
                endforeach;
            endif;
        ?>
    </div>
    <form method="POST">
        <label for="login">
            Login:
            <!-- entrada do login -->
            <input type="text" name="login" id="login">
        </label>
        <br>
        <label for="senha">
            Senha:
            <!-- entrada da senha -->
            <input type="password" name="senha" id="senha">
        </label>
        <br>
        <br>
        <!-- botão que submete os dados -->
        <input type="submit" name="enviar-formulario" value="Enviar">
    </form>
</body>
</html>