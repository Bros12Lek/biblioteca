<?php 

session_start();

//conexão com banco de dados
require_once "./src/mysqlConnection.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$querry = "SELECT * FROM usuarios WHERE email = :email";
$statement = $pdo->prepare($querry);
$statement->bindValue(":email", $email, PDO::PARAM_STR);
$statement->execute();

$array = $statement->fetch(PDO::FETCH_ASSOC);

if(password_verify($senha,$array['senha'])){
   $_SESSION['usuario'] = $array['nome'];
   $_SESSION['login'] = "logado";
   $_SESSION['email'] = $array['email'];
   header("Location:../index.php");
   
}else{
    echo "senha  incorreta !";
}