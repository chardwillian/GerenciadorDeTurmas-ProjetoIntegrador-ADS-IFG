<?php  
	require 'conexao.php';

	$lista = $conexao->prepare("select * from cad_aluno");
	$lista -> execute();
	echo "<table class='table  table-hover table-bordered'>"
	  ."<thead>"
		 ."<tr>"
		 ."<th scope='col'>Matricula</th>"
		 ."<th scope='col'>Nome</th>"
		 ."<th scope='col'>Endereço</th>"
		 ."<th scope='col'>Telefone</th>"
		 ."<th scope='col'>Nome Do Curso</th>"
		 ."<th scope='col'>Função</th>"
		 ."</tr>"
		 ."</thead>";
	$li = $lista->fetchALL(PDO::FETCH_OBJ);
	foreach ($li as $valor){
	  echo"<tbody>"
	  ."<tr>"
	  ."<th scope='row'>$valor->mat</th>"
	  ."<td>$valor->nome</td>"
	  ."<td>$valor->end</td>"
	  ."<td>$valor->tel</td>"
	  ."<td>$valor->nome_curso</td>"
	  ."<td><a href='alterar-aluno.php?mat=$valor->mat&nome=$valor->nome&end=$valor->end&tel=$valor->tel&curso=$valor->nome_curso' class='btn btn-success'>Alterar</a> 
	  <a href='delete-aluno.php?mat=$valor->mat&nome=$valor->nome&end=$valor->end&tel=$valor->tel&curso=$valor->nome_curso' class='btn btn-danger'>Excluir</a>"
	  ."</tr>"
	  ."<tr>"
	  ."</tbody>";
	 
	
	}
	
	
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Listagem de Alunos</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
	<p><a href="home.php"><- Voltar para home</a></p>	
	</body>
	
	</html>