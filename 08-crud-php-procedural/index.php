<?php
    // Incluindo o cabeçalho
    include_once 'includes/header.php';

    // Incluindo a mensagem de sucesso ou erro
    include_once 'includes/message.php';

    // Exigindo a conexão com o banco de dados
    require_once 'db_connect.php';
?>

    <main>
        <section class="row">            
            <div class="col s12 m6 push-m3">
                <h3 class="light">Clientes</h3>
                <br>
                <a href="add.php" class="btn">Adicionar cliente</a>
                <table class="striped responsive-table">
                    <thead>
                        <tr>
                            <th>Nome </th>
                            <th>Sobrenome </th>
                            <th>E-mail </th>
                            <th>Idade </th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        // Pesquisa de todos as colunas da tabela clientes
                        $sql = "SELECT * FROM clientes";
                        // Fazendo a pesquisa e atribuindo o resultado
                        // em uma variável
                        $resultado = mysqli_query($connect, $sql);

                        // Percorrendo o array de resultado enquanto houver dados
                        // e imprimindo os dados dentro da tabela
                        while ( $dados = mysqli_fetch_array($resultado) ) :
                        ?>
                        <tr>
                            <td> <?= $dados['nome'] ?> </td>
                            <td> <?= $dados['sobrenome'] ?> </td>
                            <td> <?= $dados['email'] ?> </td>
                            <td> <?= $dados['idade'] ?> </td>
                            <td>
                                <a href="edit.php?id=<?= $dados['id'] ?>"
                                    class="btn blue">
                                    <i class="material-icons">edit</i>
                                </a>
                                <a href="#modal<?= $dados['id'] ?>"
                                    class="btn red modal-trigger">
                                    <i class="material-icons">delete</i>
                                </a>

                                <div id="modal<?= $dados['id'] ?>" class="modal">
                                    <div class="modal-content">
                                        <h4>Deletar</h4>
                                        <p>Tem certeza que quer deletar esse cliente?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="php_action/delete.php" method="post">
                                            <input type="hidden" name="id" value="<?= $dados['id'] ?>">
                                            <button type="submit" name="btn-deletar" class="btn">
                                                Sim, quero deletar
                                            </button>
                                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">
                                                Cancelar
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                        endwhile;

                        // Fechando a conexão
                        mysqli_close($connect);
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

<?php include_once 'includes/footer.php' // Incluindo o rodapé ?>