<?php

// Exigindo a conexão com o banco de dados
require_once 'db_connect.php';

// Inicia sessão
session_start();

if ( isset($_POST['btn-deletar']) ) :
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if ( mysqli_query($connect, $sql) ):
        $_SESSION['mensagem'] = "Cliente deletado com sucesso!";

        // Fechando a conexão
        mysqli_close($connect);

        header("Location: ../index.php?id=$id");
    else :
        $_SESSION['mensagem'] = "Erro ao deletar cliente.";
        
        // Fechando a conexão
        mysqli_close($connect);

        header("Location: ../index.php?id=$id");
    endif;
endif;