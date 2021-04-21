<?php
	require "conexao.php";
	session_start();
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	$validar = $conexao->prepare("select * from login where usuario = '$usuario'");
	$validar->execute();
	if ($validar->rowCount() <> 0){
		$lista = $validar->fetchAll(PDO::FETCH_OBJ);
		foreach ($lista as $user) {
			if (password_verify($senha, $user->senha)) {
				$_SESSION['logado'] = true;
	    		header("location:home.php");
			} else {
	    		echo "<h1>ERRO ... senha incorreta!!!</h1>";
	    		$_SESSION['logado'] = false;
				echo "<h3><a href='login.php'><< Voltar </h3>";
			}
		}
	} else {
		echo "<h1>ERRO ... Você não está cadastrado!!!</h1>";
		$_SESSION['logado'] = false;
		echo "<h3><a href='login.php'><< Voltar </h3>";
	}


?>