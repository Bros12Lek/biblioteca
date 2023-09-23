<?php 

session_start();

//conexão com banco de dados
$pdo = new PDO("mysql:dbname=biblioteca;host=localhost:3306;", "root", "250305");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
   header("Location:../index.php");
   
}else{
    echo "senha  incorreta !";
}