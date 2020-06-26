<?php

// Exigindo a conexão com o banco de dados
require_once 'db_connect.php';

// Inicia sessão
session_start();

if ( isset($_POST['btn-cadastrar']) ) :
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

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