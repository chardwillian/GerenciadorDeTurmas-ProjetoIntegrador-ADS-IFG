<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Secretaria</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="sec.css">
</head>
<body>
	<section>
	<form action="update-curso.php" method="GET" class="form-group">
		<h4 class="display-4">Alterar informações do curso</h4>
		<label for="">Matricula:</label>
		<input type="text" name="mat" value="<?php echo $_GET['mat'];?>" class="form-control" readonly> 
		<label for="">Nome:</label>
		<input type="text" name="nome" value="<?php echo $_GET['nome'];?>" class="form-control"> 
		<label for="">Endereço:</label>
		<input type="text" name="end" value="<?php echo $_GET['end'];?>" class="form-control"> 
		<label for="">telefone:</label>
		<input type="text" name="tel" value="<?php echo $_GET['tel'];?>" class="form-control"> 
		<label for="">Curso Aprovado: </label>
		<input type="text" name="curso" value="<?php echo $_GET['curso'];?>" class="form-control"> 
		<input type="submit" value="Alterar">
	</form>
	</section>
</body>
</html>