<!DOCTYPE html>
<?php
	session_start();
	if (isset($_SESSION['logado'])): //isset verifica se existe a variavel ou se é verdadeira
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de alunos nas turmas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="sec.css">
</head>
<body class="bg-dark">
<h1 class="display-4 text-white">Cadastro de alunos nas turmas</h1>
	<form action="cad-aluno-turma.php" method="POST" class="form-group">
		<section>
		<label for="">Nome:</label>
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
		</select>
		<label for="">Id Turma:</label>
		<select name="nometurma" class="form-control">
			<?php  
				require 'conexao.php';
				$lista = $conexao->prepare("select * from turmas");
				$lista->execute();
				$li = $lista->fetchAll(PDO::FETCH_OBJ);
				foreach ($li as $valor) {
					echo "<option value='$valor->id'>$valor->id</option>";
				}
			?>		
		</select>
		<input type="submit" value="Cadastrar" class="btn btn-success"><br>
		<a href='home.php'>Voltar a página Home</a>
		</section>
	</form>
	
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
