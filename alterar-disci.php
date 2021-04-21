<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Secretaria</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="sec.css">
</head>
<body>
<form action="update-disc.php" method="GET">
		<fieldset>
			<legend>Cadastro de Disciplinas</legend>
			<p>Nome: <br>
			<input type="text" name="nome"> </p> 
			<p>Carga Horária: <br>
			<input type="number" name="carga" min="0" required> </p>
			<p>Ementa: <br>
			<textarea name="ementa" rows=5 required></textarea> </p>
			<p>Bibliografia: <br>
			<textarea name="biblio" rows=5 required></textarea> </p>
			<p>Pré-Requisito: <br>
			<input type="text" name="pre" required> </p>	
		</fieldset>
		<br><input type="submit" value="Cadastrar">
		<input type="reset" value="Limpar">
	</form>
</body>
</html>