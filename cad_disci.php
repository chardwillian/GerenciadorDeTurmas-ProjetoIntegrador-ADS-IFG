<?php
 require 'conexao.php';
 $nome = $_GET['nome'];
 $carga = $_GET['carga'];
 $ementa = $_GET['ementa'];
 $biblio = $_GET['biblio'];
 $pre = $_GET['pre'];

 $cad = $conexao->prepare("insert into cad_disciplina(nome, carga, ementa,biblio,
  pre) values ('$nome','$carga', '$ementa', '$biblio', '$pre')");
 $cad->execute();
 echo "Dados inseridos";
?>
