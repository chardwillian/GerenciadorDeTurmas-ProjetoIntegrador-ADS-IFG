<?php
	session_start(); //iniciar sessão
	unset($_SESSION['logado']); //unset destroi a variavel session
	header('location:login.php'); //te teletransporta
	session_destroy(); // acaba com a sessão criada
?>