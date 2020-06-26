<?php
    // Incluindo o cabeçalho
    include_once 'includes/header.php';

    // Incluindo a mensagem de sucesso ou erro
    include_once 'includes/message.php';

    // Exigindo a conexão com o banco de dados
    require_once 'db_connect.php';

    // Exigindo a função que remove o cross site scripting
    require_once 'includes/remove_xss.php';

    // Verifica se há um parâmetro id
    if ( isset($_GET['id']) ) :
        $id = clear($_GET['id']);

        $sql = "SELECT * FROM clientes WHERE id = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
    endif;
?>

    <main>
        <section class="row">            
            <div class="col s12 m6 push-m3">
                <h3 class="light">Editar Cliente</h3>
                <form action="php_action/update.php" method="POST">
                    <input type="hidden" name="id" value="<?= $dados['id'] ?>">
                    <div class="input-field col s12">
                        <input type="text" name="nome" id="nome"
                            value="<?= $dados['nome'] ?>">
                        <label for="nome">Nome</label>
                    </div>

                    <div class="input-field col s12">
                        <input type="text" name="sobrenome" id="sobrenome"
                            value="<?= $dados['sobrenome'] ?>">
                        <label for="sobrenome">Sobrenome</label>
                    </div>

                    <div class="input-field col s12">
                        <input type="email" name="email" id="email"
                            value="<?= $dados['email'] ?>">
                        <label for="email">E-mail</label>
                    </div>

                    <div class="input-field col s12">
                        <input type="number" name="idade" id="idade"
                            value="<?= $dados['idade'] ?>">
                        <label for="idade">Idade</label>
                    </div>

                    <button type="submit" name="btn-salvar" class="btn">Salvar</button>
                    <a href="index.php" class="btn green">Lista de clientes</a>
                </form>
            </div>
        </section>
    </main>

<?php include_once 'includes/footer.php' // Incluindo o rodapé ?>