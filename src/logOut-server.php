<?php 
session_start();

//conexão com banco de dados
require_once "./src/mysqlConnection.php";

if(isset($_SESSION['usuario'])){
    echo "O usuario logado era o " . $_SESSION['usuario'] . "<br>";
    echo "O usuario agora sera desligado do servidor";
    echo "<br>";

    session_unset();
    session_destroy();
}

if(!isset($_SESSION['login']) || !isset($_SESSION['usuario'])){
    $_SESSION['login'] = "deslogado";
    $_SESSION['usuario'] = "usuario_anonimo"; 
    echo $_SESSION['login'];
    echo "<br>";
    echo $_SESSION['usuario'];
}