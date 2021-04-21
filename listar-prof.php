<?php  
	require 'conexao.php';

	$lista = $conexao->prepare("select * from cad_prof order by id");
	$lista->execute();

	$li = $lista->fetchAll(PDO::FETCH_OBJ);
	foreach ($li as $valor) {
		
		echo "$valor->nome <br>";
		echo "$valor->endereco <br>";
		echo "$valor->telefone <br>";
		echo "$valor->titulacao_maxima <br>";
		echo "<b>Cursos:</b><br> <ul>";
		$listar = $conexao->prepare("SELECT * FROM cad_curso INNER JOIN curso_prof ON cad_curso.id = curso_prof.cod_curso where curso_prof.cod_prof = $valor->id; ");
		$listar->execute();
		$list = $listar->fetchAll(PDO::FETCH_OBJ);
		foreach ($list as $v) {
			echo "<li>$v->curso</li>";
		}
		echo "</ul>";

		echo "<hr>";
	}

?>