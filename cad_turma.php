<?php
 require 'conexao.php';
 $curso = $_POST['curso'];
 $ano = $_POST['ano']; 
 $semestre = $_POST['semestre'];  
 $dia = $_POST['dia'];  
 $horario = $_POST['horario']; 

 $cad = $conexao->prepare("insert into turmas(cod_curso, ano, semestre) values ('$curso','$ano', '$semestre')");
 $cad->execute();
 $id_turma = $conexao->lastInsertId();
  
 $cad2 = $conexao->prepare("insert into dias_horario(cod_turma,dia, horario) values ('$id_turma','$dia', '$horario')");
 $cad2->execute();
 
 echo "Dados inseridos";
?>