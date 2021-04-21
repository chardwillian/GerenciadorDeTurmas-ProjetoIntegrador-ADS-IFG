<!DOCTYPE html>
<?php
	session_start();
	if (isset($_SESSION['logado'])): //isset verifica se existe a variavel ou se é verdadeira
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de turmas em disciplinas </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="sec.css">
</head>
<body class="bg-dark">
<h1 class="display-4 text-white">Cadastro de turmas nas disciplinas</h1>
<section>
	<form action="cad-turma-disciplina.php" method="POST" class="form-group">
		<label for="">Nome da turma: </label>
    
		<select name="turma" class="form-control">
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
		<label for="">Nome da disciplina: </label>
		
        <select name="nomedisciplina" class="form-control">
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
