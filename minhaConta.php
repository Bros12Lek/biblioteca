<?php 
session_start();

//conexão com banco de dados
 $pdo = new PDO("mysql:dbname=biblioteca;host=localhost:3306;", "root", "250305");
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $usuario = $_SESSION['usuario'];

 $querry = "SELECT * FROM usuarios WHERE nome =  :user";
 $statement = $pdo->prepare($querry);
 $statement->bindValue(":user",$usuario, PDO::PARAM_STR);
 $statement->execute();
 
 $array = $statement->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Minha Conta - Melhor Leitura</title>
</head>
<body class="bodyMyAccount">
    <div class="container-account">
        <p>Nome: <?=$array['nome']?></p>
        <p>Email: <?=$array['email']?></p>
        <a href="./mudarSenha.php">Mudar Senha</a>
    </div>    
</body>
</html>