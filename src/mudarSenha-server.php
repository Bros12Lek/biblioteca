<?php

session_start();

require_once("./src/mysqlConnection.php");

$querry = "UPDATE usuarios SET senha = :senha WHERE email = :email";
$email = $_SESSION['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$statement = $pdo->prepare($querry);
$statement->bindValue(":senha",$senha);
$statement->bindValue(":email",$email);
if($statement->execute()){
    header("Location:./logOut-server.php");
}