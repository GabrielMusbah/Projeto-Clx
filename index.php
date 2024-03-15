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
	<title>CLX | Listagem</title>
</head>

<body class="bg-light">

	<header class="bg-white border-bottom border-2 mb-4">
		<nav class="navbar">
			<div class="container-fluid justify-content-start">

				<img src="./img/logo.png" alt="logo" width="80" height="80">

				<h1 class="m-0">
					CLX Tech
				</h1>

			</div>
		</nav>
	</header>

	<main class="container bg-white border border-3 rounded p-4">
		<h2 class="text-center m-0 py-2">
			Listagem de Usuarios
		</h2>

		<a href="/funcionarios/cria.php" class="btn btn-primary mb-3 p-2">Criar Novo</a>

		<div class="table-responsive overflow-auto">

			<table class="table">
				<thead>
					<tr>
						<th class="text-center" scope="col">ID</th>
						<th class="text-center" scope="col">Nome</th>
						<th class="text-center" scope="col">Data de Nascimento</th>
						<th class="text-center" scope="col">Salario</th>
						<th class="text-center" scope="col">Usuário</th>
						<th class="text-center" scope="col">Senha</th>
						<th class="text-center" scope="col">Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php

					$host = 'localhost';
					$dbname = 'db';
					$username = 'root';
					$password = '';

					try {
						$sql = "SELECT * FROM funcionarios";

						$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);


						$stmt = $pdo->query($sql);

						if ($stmt->rowCount() > 0) {
							while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

								$id = $row['id'];
								$nome = $row['nome'];
								$data_nascimento = date("d/m/Y", strtotime($row['data_nascimento']));
								$salario = $row['salario'];
								$usuario = $row['usuario'];
								$senha = $row['senha'];

								echo "<tr>";
								echo "<td class='text-center'>$id</td>";
								echo "<td class='text-center'>$nome</td>";
								echo "<td class='text-center'>$data_nascimento</td>";
								echo "<td class='text-center'>$salario</td>";
								echo "<td class='text-center'>$usuario</td>";
								echo "<td class='text-center'>$senha</td>";
								echo "<td class='d-flex justify-content-center'>";
								echo "<span class='' style='white-space: nowrap;'>";
								echo "<a href='/funcionarios/edita.php?id=$id' class='btn btn-primary btn-sm me-2'>";
								echo "<span class='material-symbols-outlined'>edit</span>";
								echo "</a>";
								echo "<a href='/funcionarios/deletar.php?id=$id' class='btn btn-danger btn-sm'>";
								echo "<span class='material-symbols-outlined'>delete</span>";
								echo "</a>";
								echo "</span>";
								echo "</td>";
								echo "</tr>";
							}
						} else {
							echo "<tr><td colspan='7' class='text-center'>Nenhum funcionário encontrado.</td></tr>";
						}
					} catch (PDOException $e) {
						echo "<tr><td colspan='7' class='text-center'>Erro ao listar funcionários: " . $e->getMessage() . "</td></tr>";
					}
					?>
				</tbody>
			</table>

		</div>

	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>