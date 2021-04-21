<?php  
	try {
		$conexao = new PDO('mysql:localhost; port=3308; dbname=projeto', 'root', '');
	} catch (Exception $e) {
		echo $e->getMessage();
		echo "<br>";
		echo $e->getCode();
	}

?>