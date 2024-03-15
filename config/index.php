<?php

$host = 'localhost';
$username = 'root';
$password = '';

try {
  $pdo = new PDO("mysql:host=$host", $username, $password);

  $sql_create_db = "CREATE DATABASE IF NOT EXISTS db";

  $sql_use_db = "USE db";

  $sql_create_table = "CREATE TABLE IF NOT EXISTS funcionarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100),
        data_nascimento DATE,
        salario DECIMAL(10, 2),
        usuario VARCHAR(50),
        senha VARCHAR(255)
    )";

  $pdo->exec($sql_create_db);
  $pdo->exec($sql_use_db);
  $pdo->exec($sql_create_table);

  echo "Banco de dados e tabela de funcionários criado.";
} catch (PDOException $e) {
  echo "Erro ao criar: " . $e->getMessage();
}
