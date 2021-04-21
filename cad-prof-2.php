<?php  
	require "conexao.php";

	$nome = $_POST['nome'];
	$end = $_POST['end'];
	$tel = $_POST['tel'];
	$titulacao = $_POST['titulacao'];
	$curso = array($_POST['curso']);

	/* Converte o array curso para inteiro*/
	foreach ($curso as $valor) {
		$curso_prof = array_map('intval', $valor);
	}

	$cad = $conexao->prepare("insert into cad_prof(nome, endereco, telefone, titulacao_maxima) values('$nome', '$end', '$tel', '$titulacao')");
	$cad->execute();
	$id_prof = $conexao->lastInsertId();
	
	foreach ($curso_prof as $valor) {
		$cad2 = $conexao->prepare("insert into curso_prof(cod_prof, cod_curso) values('$id_prof', '$valor')");
		$cad2->execute();
	}
	
	
	
?>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="sec.css">
</head>

<div class="alert alert-success">
    <h3 class="alert-heading">Operação realizada com sucesso</h3>
    <h4></h4>
    <hr>
    <p><a href="home.php"><- Voltar para home</a></p>
</div>

</html>