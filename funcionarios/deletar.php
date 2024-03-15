<?php

$host = 'localhost';
$dbname = 'db';
$username = 'root';
$password = '';

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $id_funcionario = $_GET['id'];

  try {
    $sql = "DELETE FROM funcionarios WHERE id = ?";

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id_funcionario]);

    header("Location: /");
    exit();
  } catch (PDOException $e) {
    echo "Erro ao excluir: " . $e->getMessage();
  }
} else {
  header("Location: /");
  exit();
}
