<?php
require "conexao.php";
$nome = $_GET['nome'];
 $end = $_GET['end']; 
 $tel = $_GET['tel'];  
 $curso = $_GET['curso'];  
 $mat = $_GET['mat']; 
$validar = $conexao->prepare("update cad_aluno set nome='$nome', end='$end', tel=$tel,nome_curso='$curso' where mat = $mat");
$validar->execute();

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
    <label for=""> <a href="listar-aluno.php"> Retornar para a listagem de alunos</a></label>
</div>

</html>