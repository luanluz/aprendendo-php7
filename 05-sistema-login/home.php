<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
        // Obtendo a conexão com o banco de dados
        require_once 'db_connect.php';

        // Iniciando sessão
        session_start();

        // Verifica se o usuário está logado
        if(!isset($_SESSION['logado'])):
            header('Location: index.php');
        endif;

        // Obtendo dados
        $id = $_SESSION['id_usuario'];

        $sql = "SELECT * FROM usuarios WHERE id = '$id'";
        $resuldado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resuldado);
        // Fechando a conexão
        mysqli_close($connect);
    ?>
    <h1> Olá, <?= $dados['nome'] ?>.</h1>
    <a href="logout.php">Sair</a>
</body>
</html>