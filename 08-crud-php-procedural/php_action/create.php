<?php

// Exigindo a conexão com o banco de dados
require_once 'db_connect.php';

// Exigindo a função que remove o cross site scripting
require_once '../includes/remove_xss.php';

// Inicia sessão
session_start();

if ( isset($_POST['btn-cadastrar']) ) :
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome',
        '$sobrenome', '$email', '$idade')";

    if ( mysqli_query($connect, $sql) ):
        $_SESSION['mensagem'] = "Cliente cadastrado com sucesso!";

        // Fechando a conexão
        mysqli_close($connect);
        header('Location: ../add.php');
    else :
        $_SESSION['mensagem'] = "Erro ao cadastrar cliente.";
        //die(mysqli_error($connect));

        // Fechando a conexão
        mysqli_close($connect);
        header('Location: ../add.php');
    endif;
endif;