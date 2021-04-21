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
		<label for="">Id:</label>
		<input type="text" name="id" value="<?php echo $_GET['id'];?>" class="form-control" readonly> 
		<label for="">Curso:</label>
		<input type="text" name="curso" value="<?php echo $_GET['curso'];?>" class="form-control"> 
		<label for="">Coordenador:</label>
		<input type="text" name="coordenador" value="<?php echo $_GET['coordenador'];?>" class="form-control"> 
		<input type="submit" value="Alterar">
	</form>
	</section>
</body>
</html>