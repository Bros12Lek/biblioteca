<?php

//conexão com banco de dados
$pdo = new PDO("mysql:dbname=biblioteca;host=localhost:3306;", "root", "250305");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);