<?php
require "conexao.php";
$lista = $conexao->prepare(" select * from cad_curso order by id asc");
$lista->execute();
echo "<table class='table  table-hover table-bordered'>"
  ."<thead>"
     ."<tr>"
     ."<th scope='col'>Id</th>"
     ."<th scope='col'>Curso</th>"
     ."<th scope='col'>Cordenador</th>"
     ."<th scope='col'>Função</th>"
     ."</tr>"
     ."</thead>";
$li = $lista->fetchALL(PDO::FETCH_OBJ);
foreach ($li as $valor) {
     echo"<tbody>"
     ."<tr>"
     ."<th scope='row'>$valor->id</th>"
     ."<td>$valor->curso</td>"
     ."<td>$valor->coordenador</td>"
     ."<td><a href='alterar-cursos.php?id=$valor->id&curso=$valor->curso&coordenador=$valor->coordenador' class='btn btn-success'>Alterar</a> 
     <a href='delete-cursos.php?id=$valor->id&curso=$valor->curso&coordenador=$valor->coordenador' class='btn btn-danger'>Excluir</a></td>"
     ."</tr>"
     ."<tr>"
     ."</tbody>";
 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Listagem de Disciplinas</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 </head>
 <body>
 <p><a href="home.php"><- Voltar para home</a></p>
 </body>
 </html>