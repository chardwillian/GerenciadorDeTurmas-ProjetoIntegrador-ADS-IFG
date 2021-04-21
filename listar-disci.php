<?php  
	require 'conexao.php';

	$lista = $conexao->prepare("select * from cad_disciplina");
	$lista->execute();
	echo "<table class='table  table-hover table-bordered'>"
	  ."<thead>"
		 ."<tr>"
		 ."<th scope='col'>Codigo</th>"
		 ."<th scope='col'>Nome</th>"
		 ."<th scope='col'>Carga</th>"
		 ."<th scope='col'>Ementa</th>"
		 ."<th scope='col'>Bibliografia</th>"
		 ."<th scope='col'>Pre-Requisitos</th>"
		 ."<th scope='col'>Função</th>"
		 ."</tr>"
		 ."</thead>";
	$li = $lista->fetchAll(PDO::FETCH_OBJ);
	foreach ($li as $disc) {
		echo"<tbody>"
	  ."<tr>"
	  ."<th scope='row'>$disc->cod</th>"
	  ."<th scope='row'>$disc->nome</th>"
	  ."<th scope='row'>$disc->carga</th>"
	  ."<th scope='row'>$disc->ementa</th>"
	  ."<th scope='row'>$disc->biblio</th>"
	  ."<th scope='row'>$disc->pre</th>"
	  ."<td><a href='alterar-disci.php?cod=$disc->cod&nome=$disc->nome&carga=$disc->carga&ementa=$disc->ementa&biblio=$disc->biblio&pre=$disc->pre' class='btn btn-success'>Alterar</a> 
	  <a href='excluir-disci.php?cod=$disc->cod&nome=$disc->nome&carga=$disc->carga&ementa=$disc->ementa&biblio=$disc->biblio&pre=$disc->pre' class='btn btn-danger'>Excluir</a>"
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