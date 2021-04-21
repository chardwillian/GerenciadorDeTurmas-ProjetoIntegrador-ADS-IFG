<?php  
	require "conexao.php";
	$usuario = $_POST['usuario'];
	$senha =  password_hash($_POST['senha'], PASSWORD_DEFAULT);;

	$cad = $conexao->prepare("insert into login (usuario, senha) values ('$usuario', '$senha')");
	$cad->execute();

	echo "<h1>Usuario $usuario cadastrado com sucesso </h1>";
	echo "<h3><a href='home.php'> << Voltar</h3>";
?>