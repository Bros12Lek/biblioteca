<?php 

session_start();

if(isset($_SESSION['usuario'])){
    session_unset();
    session_destroy();
    $_SESSION['login'] = "Deslogado" ?? null;
    header("Location: ../login.php");
}