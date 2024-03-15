<?php

$host = 'localhost';
$dbname = 'db';
$username = 'root';
$password = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nome = $_POST['nome'];
  $data_nascimento = $_POST['data_nascimento'];
  $salario = $_POST['salario'];
  $usuario = $_POST['usuario'];
  $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

  $sql = "INSERT INTO funcionarios (nome, data_nascimento, salario, usuario, senha) VALUES (?, ?, ?, ?, ?)";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $data_nascimento, $salario, $usuario, $senha]);

    header("Location: /");
    exit();
  } catch (PDOException $e) {
    echo "Erro ao adicionar: " . $e->getMessage();
    header("Location: /");
    exit();
  }
}
