<?php

//para iniciar a conexão com o banco de dados buscando do arquivo conexão, ou seja, não precisa criar varias vezes, somente usar o include_once
include_once("conexao.php");

$nome = $_POST['nomefunc'];
$email = $_POST['emailfunc'];
$profissao = $_POST['profissaofunc'];
$sexo = $_POST['sexo'];
$setor = $_POST['setor'];
$numero = $_POST['numero'];
$telefone = $_POST['telefone'];
$datanascimento = $_POST['datanascimentofunc'];
//rg digitalizado
$observacoes = $_POST['observacoes'];

$resultado_cadastro_funcionario = "INSERT INTO funcionarios(nome, email, profissao, sexo, setor , numero, telefone, datanascimento, rgdigitalizado, observacoes) 
VALUES ('$nome', 
		'$email', 
		'$profissao',
		 'F', 
		 '$setor', 
		 '$numero',
		 '$telefone',
		 '$datanascimento',
		 'RG_DIGITALIZADO',
		 '$observacoes')";

$resultado_funcionario = mysqli_query($conexao, $resultado_cadastro_funcionario);

header("Location: index.php");


?>