<?php

include('conexao.php');

$id=$_POST['id'];
$nome=$_POST['nome'];
$data_de_nascimento=$_POST['data_de_nascimento'];
$matricula=$_POST['matricula'];

//$echo '---';
$sql =        "UPDATE alunos SET ";
$sql = $sql . "data_de_nascimento='$data_de_nascimento', ";
$sql = $sql . "nome='$nome', ";
$sql = $sql . "matricula='$matricula' ";
$sql = $sql . "WHERE id=$id;";


//echo
//$sql = $sql . "WHERE id=$id;";
//echo $sql;
//die();

$inserir = mysqli_query($conexao,$sql);

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro de Alunos</title>  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<div class="container" style="widht: 500px;margin-top: 20px">
		<h4>Aluno atualizado</h4>
	</div>
	<div style="text-align:center">
		<a href="alunos_list.php" role="button" class="btn btn-sm btn-primary">Lista de alunos</a>
		
</div>
</body>
</html>
