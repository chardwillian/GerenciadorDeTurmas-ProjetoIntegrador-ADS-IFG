<!DOCTYPE html>
<?php
	session_start();
	if (isset($_SESSION['logado'])): //isset verifica se existe a variavel ou se é verdadeira
?>
<html>

<head>
	<meta charset="utf-8">
	<title>Cadastro de avaliações</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="sec.css">
</head>

<body class="bg-dark">
	<h1 class="display-4 text-white">Cadastro de avaliações</h1>
	<section>
		<form action="cad_avaliacao.php" method="POST" class="form-group">
			<label for="">Nome do aluno:</label>
			<select name="nomealuno" class="form-control">
				<?php
				require 'conexao.php';
				$lista = $conexao->prepare("select * from cad_aluno");
				$lista->execute();
				$li = $lista->fetchAll(PDO::FETCH_OBJ);
				foreach ($li as $valor) {
					echo "<option value='$valor->mat'>$valor->nome</option>";
				}
				?>
			</select> </p>
			<label for="">Nome do professor:</label>
			<select name="nomeprof" class="form-control">
				<?php
				require 'conexao.php';
				$lista = $conexao->prepare("select * from cad_prof");
				$lista->execute();
				$li = $lista->fetchAll(PDO::FETCH_OBJ);
				foreach ($li as $valor) {
					echo "<option value='$valor->id'>$valor->nome</option>";
				}
				?>
			</select> </p>
			<label for="">Nome da disciplina:</label>
			<select name="disciplina" class="form-control">
				<?php
				require 'conexao.php';
				$lista = $conexao->prepare("select * from cad_disciplina");
				$lista->execute();
				$li = $lista->fetchAll(PDO::FETCH_OBJ);
				foreach ($li as $valor) {
					echo "<option value='$valor->cod'>$valor->nome</option>";
				}
				?>
			</select>

			<label for="">Nota 1:</label>
			<input type="text" name="nota1" class="form-control" require>
			<br>
			<label for="">Nota 2:</label>
			<input type="text" name="nota2"  class="form-control" require>
			<br>
			<label for="">Nota final:</label>
			<input type="text" name="notafinal"  class="form-control" require>
			<br>
			<label for="">Frequência:</label>
			<input type="text" name="frequencia" class="form-control" require>

			<input type="submit" value="Cadastrar" class="btn btn-success"><br>
			<a href='home.php'>Voltar a página Home</a>
		</form>
	
	<h4><a href="listar-avaliacoes.php">Listar avaliações</a></h3>
</section>
</body>

</html>
<?php
	else:
?>
	<!-- COLOQUE AQUI TODA PARTE CASO SEJA FALSO-->
	
	<h2>ERRO: Necessário estar logado no sistema</h2>
	<a href='login.php'>Logar</a>

<?php
	endif;
?>
