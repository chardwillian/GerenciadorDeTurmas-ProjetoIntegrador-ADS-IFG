<?php
require "conexao.php";
$id = $_GET['id'];
 $curso = $_GET['curso']; 
 $coordenador = $_GET['coordenador'];  
$validar = $conexao->prepare("update cad_curso set curso='$curso', coordenador='$coordenador' where id = $id");
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
    <label for=""> <a href="listar-cursos.php"> Retornar para a listagem de cursos</a></label>
</div>

</html>