<?php  
	require "conexao.php";

    $nomeprof = $_POST['nomeprof'];
    $turma = $_POST['turma'];

	/* Converte o array nomeprof para inteiro*/
	/*foreach ($nomeprof as $valor) {
		$nome_prof = array_map('intval', $valor);
    }
    
    foreach ($nometurma as $valor1) {
		$nome_turma = array_map('intval', $valor1);
	}
	
	foreach ($nome_turma as $nome_turma1){
	foreach ($nome_prof as $nome_prof1){*/
	$cad = $conexao->prepare("insert into prof_turma(cod_prof,cod_turma) values('$nomeprof','$turma')");
	$cad->execute();
	

	/*foreach ($nome_turma as $nome_turma1){
		$cad2 = $conexao->prepare("insert into turma_prof(cod_turma) values('$nome_turma1')");
		$cad2->execute();
		}*/
		
    
    /*$id_prof = $conexao->lastInsertId();
	
	foreach ($curso_prof as $valor) {
		$cad2 = $conexao->prepare("insert into curso_prof(cod_prof, cod_curso) values('$id_prof', '$valor')");
		$cad2->execute();
	}*/
	
	

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