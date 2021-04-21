<!DOCTYPE html>
<?php
	session_start();
	if (isset($_SESSION['logado'])): //isset verifica se existe a variavel ou se é verdadeira
?>
<html>

<head>
	<meta charset="utf-8">
	<title>Cadastro de Professores</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="sec.css">
</head>

<body class="bg-dark">
	<h1 class="display-4 text-white">Cadastro de Professores</h1>
	<section>
		<form action="cad-prof-2.php" method="POST" class="form-group">
			<label for="">Nome:</label>
			<input type="text" name="nome" class="form-control">
			<label for="">Endereço:</label>
			<input type="text" name="end" class="form-control">
			<label for="">Telefone:</label>
			<input type="text" name="tel" class="form-control">
			<label for="">Titulação:</label>
			<select name="titulacao" class="form-control">
				<option value="Graduação">Graduação</option>
				<option value="Especialização">Especialização</option>
				<option value="Mestrado">Mestrado</option>
				<option value="Doutorado">Doutorado</option>
			</select>
			Curso:
			<select name="curso[]" class="form-control" multiple >
				<?php
				require 'conexao.php';
				$lista = $conexao->prepare("select * from cad_curso");
				$lista->execute();
				$li = $lista->fetchAll(PDO::FETCH_OBJ);
				foreach ($li as $valor) {
					echo "<option value='$valor->id'>$valor->curso</option>";
				}
				?>
			</select>
			<input type="submit" value="Cadastrar" class="btn btn-success"><br>
			<a href='home.php'>Voltar a página Home</a>
		</form>
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
