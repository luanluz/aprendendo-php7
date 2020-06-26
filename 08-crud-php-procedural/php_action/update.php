<?php

// Exigindo a conexão com o banco de dados
require_once 'db_connect.php';

// Inicia sessão
session_start();

if ( isset($_POST['btn-salvar']) ) :
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome',
        email = '$email', idade = '$idade' WHERE id = '$id'";

    if ( mysqli_query($connect, $sql) ):
        $_SESSION['mensagem'] = "Cliente atualizado com sucesso!";

        // Fechando a conexão
        mysqli_close($connect);

        header("Location: ../edit.php?id=$id");
    else :
        $_SESSION['mensagem'] = "Erro ao atualizar cliente.";
        
        // Fechando a conexão
        mysqli_close($connect);

        header("Location: ../edit.php?id=$id");
    endif;
endif;