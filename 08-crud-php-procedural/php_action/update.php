<?php

// Exigindo a conexão com o banco de dados
require_once 'db_connect.php';

// Exigindo a função que remove o cross site scripting
require_once '../includes/remove_xss.php';

// Inicia sessão
session_start();

if ( isset($_POST['btn-salvar']) ) :
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);
    $id = clear($_POST['id']);

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