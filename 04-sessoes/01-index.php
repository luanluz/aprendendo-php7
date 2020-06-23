<?php

// Inicia sessão
session_start();

// Cria sessão
$_SESSION['cor'] = "Azul";
$_SESSION['carro'] = "Fiat Uno";

// Imprimindo valores da sessão e o id da sessão
echo $_SESSION['cor']. '<br>' . $_SESSION['carro'] . '<br>' .
    session_id();