<?php
 require 'conexao.php';
 $nome = $_POST['nomecurso'];
 $coordenador = $_POST['coordenador'];
 if (isset($nome) and isset($coordenador)){
 $cad = $conexao->prepare("insert into cad_curso (curso, coordenador) values ('$nome','$coordenador')");
 $cad->execute();
 echo "Dados inseridos";
 }
?>
