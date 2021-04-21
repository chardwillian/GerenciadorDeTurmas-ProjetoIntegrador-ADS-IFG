<?php  
	require "conexao.php";

    $nomedisciplina = $_POST['nomedisciplina'];
    $turma = $_POST['turma'];

    $cad = $conexao->prepare("insert into turma_disciplina(cod_turma,cod_disciplina) values('$turma','$nomedisciplina')");
	$cad->execute();
    
    echo "<br>Dados inseridos"; 
    ?>