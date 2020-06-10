<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <!-- Formulário para obter os dados -->
    <!-- em action é enviado os dados para o script correspondente -->
    <form action="dados.php" method="POST">
        <label for="nome">
            Nome:
            <!-- entrada do nome -->
            <input type="text" name="nome" id="nome">
        </label>
        <br>
        <label for="email">
            E-mail:
            <!-- entrada do email -->
            <input type="email" name="email" id="email">
        </label>
        <br>
        <!-- botão que submete os dados -->
        <input type="submit" value="Enviar">
    </form>

    <hr>

    <!-- Formulário utilizando o método GET -->
    <form action="dados.php" method="GET">
        <label for="nome">
            Nome:
            <!-- entrada do nome -->
            <input type="text" name="nome" id="nome">
        </label>
        <br>
        <label for="nome">
            E-mail:
            <!-- entrada do email -->
            <input type="email" name="email" id="email">
        </label>
        <br>
        <!-- botão que submete os dados -->
        <input type="submit" value="Enviar">
    </form>

    <!--
        Utilizando dos parâmetros para enviar informações
        para o script de dados
    -->
    <a href="dados.php?nome=Luan&email=luan@email.com">Enviar dados</a>
</body>
</html>