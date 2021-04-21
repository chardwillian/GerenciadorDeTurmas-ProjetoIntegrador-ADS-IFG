<?php
 require 'conexao.php';
 $nome = $_POST['nome'];
 $end = $_POST['end']; 
 $tel = $_POST['tel'];  
 $curso = $_POST['curso'];  

 $cad = $conexao->prepare("insert into cad_aluno(nome, end, tel,
  nome_curso) values ('$nome','$end', '$tel', '$curso')");
 $cad->execute();
 echo "Dados inseridos";
?>
