<?php 

try {
    $pdo = new PDO('mysql:host=localhost:3307;dbname=escola',"root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}



?>