<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Secretaria</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="sec.css">
</head>
<body >
	<h3>Pesquisar Aluno</h3>
	<form action="" method="post">
		<p>Aluno:</p>
		<p>
			<select name="aluno">
			<?php  
				require 'conexao.php';
				$lista = $conexao->prepare("select * from cad_aluno order by nome");
				$lista->execute();
				$li = $lista->fetchAll(PDO::FETCH_OBJ);
				foreach ($li as $valor) {
					echo "<option value='$valor->mat'>$valor->nome</option>";
				}
			?>		
		 	</select>
		</p>
		<p><input type="submit" value="Pesquisar"></p>
	</form>
	<hr>
	<table class='table  table-hover table-bordered'>
		<tr>
			<td>ALUNO</td>
			<td>DISCIPLINA</td>
			<td>PROFESSOR</td>
			<td>NOTA 1</td>
			<td>NOTA 2</td>
			<td>NOTA FINAL</td>
			<td>FREQUENCIA</td>
		</tr>
		<?php
		if (isset($_POST['aluno'])) {
			$aluno = $_POST['aluno'];
			$listar = $conexao->prepare("
		SELECT
		  alu.nome AS Aluno,
		  disc.Nome as Disciplina,
		  prof.nome as Professor,
		  av.nota1,
		  av.nota2,
		  av.nota_final,
		  av.frequencia
		FROM
  			avaliacao av
    	LEFT JOIN 
    		cad_aluno alu ON (av.cod_aluno = alu.mat)
    	LEFT JOIN 
    		cad_disciplina disc ON (av.cod_disciplina = disc.cod)
    	LEFT JOIN 
    		cad_prof prof ON (av.cod_prof = prof.id)
		where 
			alu.mat = :aluno");
		$listar->bindValue(':aluno',$aluno);
		$listar->execute();
		$li = $listar->fetchAll(PDO::FETCH_OBJ);
			foreach ($li as $valor) {
				echo "<tr>";
				echo "<td>$valor->Aluno</td>";
				echo "<td>$valor->Disciplina</td>";
				echo "<td>$valor->Professor</td>";
				echo "<td>$valor->nota1</td>";
				echo "<td>$valor->nota2</td>";
				echo "<td>$valor->nota_final</td>";
				echo "<td>$valor->frequencia</td>";
				echo "</tr>";
			}
		}
		?>
		
	</table>
	<p><a href="home.php"><- Voltar para home</a></p>	
</body>
</html>