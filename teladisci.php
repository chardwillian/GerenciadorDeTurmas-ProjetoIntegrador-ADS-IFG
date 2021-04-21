<!DOCTYPE html>
<?php
	session_start();
	if (isset($_SESSION['logado'])): //isset verifica se existe a variavel ou se é verdadeira
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar Disciplina</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="sec.css">
</head>
<body class="bg-dark">
	<h1 class="display-4 text-white">Cadastrar Disciplinas</h1>
	
	<section>
	<form action="cad_disci.php" method="GET" class="form-group">
		<fieldset>
			
			<label for="">Nome:</label>
			<input type="text" name="nome" class="form-control" required>  </p>
			<label for="">Carga Horária: </label> 
			<input type="number" name="carga" min="0" class="form-control" required> </p>
			<label for="">Ementa: </label>
			<textarea name="ementa" rows=5 class="form-control" required></textarea> </p>
			<label for="">Bibliografia:</label> 
			<textarea name="biblio" rows=5 class="form-control" required></textarea> </p>
			<label for="">Pré-Requisito:</label>
			<input type="text" name="pre" class="form-control" required> </p>	
		</fieldset>
		<input type="submit" value="Cadastrar" class="btn btn-success">
		<input type="reset" value="Limpar" class="btn btn-danger"><br>
		<a href='home.php'>Voltar a página Home</a>
		<h3><a href="listar-disci.php">Disciplinas Cadastradas</a></h3><br>
		
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
