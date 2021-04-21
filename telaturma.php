<!DOCTYPE html>
<?php
	session_start();
	if (isset($_SESSION['logado'])): //isset verifica se existe a variavel ou se é verdadeira
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretaria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="sec.css">
</head>

<body class="bg-dark">
     <h1 class="display-4 text-white">Cadastro de turmas</h1>
    <section id='sec'>
        <div>
           
            <form action="cad_turma.php" method="post" class="form-group">
                Curso:
                <select name="curso" class="form-control">
                    <?php
                    require 'conexao.php';
                    $lista = $conexao->prepare("select * from cad_curso");
                    $lista->execute();
                    $li = $lista->fetchAll(PDO::FETCH_OBJ);
                    foreach ($li as $valor) {
                        echo "<option value='$valor->id'>$valor->curso</option>";
                    }
                    ?>
                </select>
                <label for="">Ano:</label>
                <input type="text" name="ano" class="form-control">
                <label for="">Semestre:</label>
                <input type="text" name="semestre" class="form-control">
                <label for="">Dia:</label>
                <input type="text" name="dia" class="form-control">
                <label for="">Horário:</label>
                <input type="text" name="horario" class="form-control">
                <input type="submit" value="Cadastrar" class="btn btn-success mt-1"><br>
                <a href='home.php'>Voltar a página Home</a>
            </form>
            <hr>
            <h3><a href="">Listar Turmas</a></h3>
        </div>
    </section>
</body>

</html>
<?php
	else:
?>
	<!-- COLOQUE AQUI TODA PARTE CASO SEJA FALSO-->
	
	<h2>ERRO: Necessário estar logado no sistema</h2>
	<a href='login.php'>Logar</a>

<?php
	endif;
?>
