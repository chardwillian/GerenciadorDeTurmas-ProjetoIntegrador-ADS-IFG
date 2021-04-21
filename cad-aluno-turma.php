<?php  
	require "conexao.php";

    $nomealuno = $_POST['nomealuno'];
    $nometurma = $_POST['nometurma'];

	/* Converte o array nomeprof para inteiro*/
/*	foreach ($nomealuno as $valor) {
		$nome_aluno = array_map('intval', $valor);
    }
    
    foreach ($nometurma as $valor1) {
		$nome_turma = array_map('intval', $valor1);
	}*/
	
	
/*	foreach ($nome_aluno as $nome_aluno1){
    foreach ($nome_turma as $nome_turma1){*/
	$cad = $conexao->prepare("insert into alunos_turma(cod_aluno,cod_turma) values('$nomealuno','$nometurma')");
	$cad->execute();


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
