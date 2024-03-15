<?php

$host = 'localhost';
$dbname = 'db';
$username = 'root';
$password = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['id'], $_POST['nome'], $_POST['data_nascimento'], $_POST['salario'], $_POST['usuario'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $salario = $_POST['salario'];
    $usuario = $_POST['usuario'];

    try {
      $sql = "UPDATE funcionarios SET nome = ?, data_nascimento = ?, salario = ?, usuario = ? WHERE id = ?";

      $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

      $stmt = $pdo->prepare($sql);
      $stmt->execute([$nome, $data_nascimento, $salario, $usuario, $id]);

      header("Location: /");
      exit();
    } catch (PDOException $e) {
      echo "Erro ao editar: " . $e->getMessage();
    }
  } else {
    echo "Todos os campos são obrigatórios.";
  }
} else {
  header("Location: /");
  exit();
}
