<?php
?>

<?php
session_start();
if (isset($_SESSION['logado'])) :
?>
	<html>

	<head>
		<title>Home</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="sec.css">
	</head>

	<body class="bg-dark">
		<section>
			<h2>Parabéns você está logado</h2>
			<form action="sair.php">
				<label class="">Deseja fazer qual operação ?</label> <br>				
				<a href="tela1.php" class="btn btn btn btn-outline-primary btn-lg mb-1 " role="button" aria-pressed="true">Cadastrar alunos</a><br>
				<a href="telacurso.php" class="btn btn btn btn-outline-primary btn-lg  mb-1" role="button" aria-pressed="true">Cadastrar cursos</a><br>
				<a href="telaturma.php" class="btn btn btn btn-outline-primary btn-lg  mb-1" role="button" aria-pressed="true">Cadastrar turmas</a><br>
				<a href="teladisci.php" class="btn btn btn btn-outline-primary btn-lg  mb-1" role="button" aria-pressed="true">Cadastrar disciplinas</a><br>
				<a href="telaavaliacao.php" class="btn btn btn btn-outline-primary btn-lg  mb-1" role="button" aria-pressed="true">Cadastrar avaliações</a><br>
				<a href="telaprof.php" class="btn btn btn btn-outline-primary btn-lg  mb-1" role="button" aria-pressed="true">Cadastrar professores</a><br>
				<a href="telaalunoturma.php" class="btn btn btn btn-outline-primary btn-lg  mb-1" role="button" aria-pressed="true">Cadastrar alunos em turmas</a><br>
				<a href="telaturmadisciplina.php" class="btn btn btn btn-outline-primary btn-lg  mb-1" role="button" aria-pressed="true">Cadastrar turmas em disciplinas</a><br>
			<a href="telaprofturma.php" class="btn btn btn btn-outline-primary btn-lg  mb-1" role="button" aria-pressed="true">Cadastrar professores em turmas</a><br>
		<input type="submit" value="Sair do Sistema" >
		</form>
		</section>
	</body>


	

	</html>
<?php
else :
?>


	<h2>ERRO: Necessário estar logado no sistema</h2>
	<a href='login.php'>Logar</a>

<?php
endif;
?>