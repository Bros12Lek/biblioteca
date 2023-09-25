<?php

session_start();

require_once("./src/mysqlConnection.php");

$titulo = ucfirst($_GET['pesquisa']);

$querry = "SELECT * FROM livros WHERE titulo = :titulo";

$statement = $pdo->prepare($querry);
$statement->bindValue(":titulo", $titulo, PDO::PARAM_STR);
$statement->execute();
$array = $statement->fetchAll(PDO::FETCH_ASSOC) or die();

if($statement->rowCount() === 0){
    echo "Nenhum Livro foi encontrado";
    die();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Livros - Melhor Leitura</title>
</head>
<body style="height: 100vh;">
    <div class="container">
        <?php foreach($array as $value): ?>

            <div class="item">
            <p> Titulo: <?= $value['titulo'] ?> </p>
            <p> Autor: <?= $value['autor'] ?> </p>
            <p> Editora: <?= $value['editora']?></p>
            </div>

        <?php endforeach ?>
    </div>
</body>
</html>