<?php 

//conexão com banco de dados
require_once "./src/mysqlConnection.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

//comandos sql
$verifyUser = "SELECT * FROM usuarios WHERE email = :email";
$insertUsuario = "INSERT INTO usuarios(nome,email,senha) VALUES(?, ?, ?)";

$stmt = $pdo->prepare($verifyUser);
$stmt->bindValue(":email",$email, PDO::PARAM_STR);
$stmt->execute();
$result = $stmt->fetchColumn();
if($result > 0){
    echo "O email já está em uso !";
}else{
    $statement = $pdo->prepare($insertUsuario);
    $statement->bindValue(1,$nome, PDO::PARAM_STR);
    $statement->bindValue(2,$email, PDO::PARAM_STR);
    $statement->bindValue(3,$senha, PDO::PARAM_STR);
    if($statement->execute()){
        header("Location:../login.php");
    };
}