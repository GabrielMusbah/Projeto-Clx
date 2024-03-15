<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <title>CLX | Criar Novo</title>
</head>

<body class="bg-light">

  <header class="bg-white border-bottom border-2 mb-4">
    <nav class="navbar">
      <div class="container-fluid justify-content-start">

        <img src="../img/logo.png" alt="logo" width="80" height="80">

        <h1 class="m-0">
          CLX Tech
        </h1>

      </div>
    </nav>
  </header>

  <main class="container bg-white border border-3 rounded p-4">
    <h2 class="text-center m-0 py-2">
      Criar Novo Usuario
    </h2>

    <a href="../index.php" class="btn btn-primary mb-3 p-2">Listagem</a>

    <form action="/funcionarios/criar.php" method="post">

      <div class="mb-3">
        <label for="inputNome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="inputNome" name="nome" required>
      </div>

      <div class="mb-3">
        <label for="inputUsuario" class="form-label">Usuário</label>
        <input type="text" class="form-control" id="inputUsuario" name="usuario" required>
      </div>

      <div class="mb-3">
        <label for="inputNome" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="inputNome" name="data_nascimento" required>
      </div>

      <div class="mb-3">
        <label for="inputSalario" class="form-label">Salário</label>
        <input type="number" class="form-control" id="inputSalario" name="salario" step="0.01" required>
      </div>

      <div class="mb-3">
        <label for="inputSenha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="inputSenha" name="senha" required>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>