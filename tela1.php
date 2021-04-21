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
     <h1 class="display-4 text-white"  >Cadastro de alunos</h1>
    <section id='sec'>
        <div>
           
            <form action="cad_aluno.php" method="post" class="form-group">
                <label for="">1-Nome:</label>
                <input type="text" name="nome" class="form-control"require>
                <label for="">2-Endereço:</label>
                <input type="text" name="end" class="form-control"require>
                <label for="">3-Telefone:</label>
                <input type="text" name="tel" class="form-control"require>
                <label for="">4- Curso:</label>
                <input type="text" name="curso" class="form-control"require>
                <input type="submit" value="Cadastrar" class="btn btn-success">
            </form>
            <hr>
            <h3><a href="listar-aluno.php">Listar Alunos</a></h3><br>
            <a href='home.php'>Voltar a página Home</a>
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
