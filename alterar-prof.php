<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Secretaria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="sec.css">
</head>
<body>
	<form action="update-prof.php" method="GET">
		Nome: <input type="text" name="nome" value="<?php echo $_GET['nome'];?>"> <br>
		Endereço:<input type="text" name="end" value="<?php echo $_GET['end'];?>"> <br>
        Telefone: <input type="text" name="tel" value="<?php echo $_GET['tel'];?>"> <br>
        Titulação_máxima:
            <select name="titulacao">
                <option value="Graduação">Graduação</option> 
                <option value="Especialização" selected>Especialização</option>
                <option value="Mestrado">Mestrado</option>
                <option value="Doutorado">Doutorado</option>
              </select> <br> 
		Curso Aprovado: <input type="text" name="curso" value="<?php echo $_GET['curso'];?>"> <br>
		<input type="submit" value="Alterar">
	</form>
</body>
</html>