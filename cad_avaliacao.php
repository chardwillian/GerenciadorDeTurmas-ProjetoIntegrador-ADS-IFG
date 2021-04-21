<?php  
	require "conexao.php";

    $nomealuno = $_POST['nomealuno'];
    $nomeprof= $_POST['nomeprof'];
    $disciplina = $_POST['disciplina'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $notafinal = $_POST['notafinal'];
    $frequencia = $_POST['frequencia'];


$cad = $conexao->prepare("insert into avaliacao(cod_aluno,cod_prof,cod_disciplina,nota1, nota2, nota_final,frequencia)
 values('$nomealuno','$nomeprof', '$disciplina', '$nota1', '$nota2', '$notafinal', '$frequencia')");
    $cad->execute();
    
    echo "<br>Dados inseridos"; 
?>