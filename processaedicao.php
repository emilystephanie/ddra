<?php

//para iniciar a conexão com o banco de dados buscando do arquivo conexão, ou seja, não precisa criar varias vezes, somente usar o include_once
include_once("conexao.php");
$result_funcionario = "SELECT * FROM funcionarios where id='3'";
$resultado_final_usuario = mysqli_query($conexao, $resultado_funcionario);
$row_funcionario = mysqli_fetch_assoc($resultado_final_usuario);


$id=$_POST['id'];
$nome = $_POST['nomefunc'];
$email = $_POST['emailfunc'];
$profissao = $_POST['profissaofunc'];
$sexo = $_POST['sexo'];
$setor = $_POST['setor'];
$numero = $_POST['numero'];
$telefone = $_POST['telefone'];
$datanascimento = $_POST['datanascimentofunc'];
$rg = $_POST['rgdigitalizado'];
$observacoes = $_POST['observacoes'];



$resultado_edicao_funcionario = "UPDATE funcionarios SET 
								nome = '$nome', 
								email = '$email', 
								profissao ='$profissao',
								sexo = '$sexo', 
								setor = '$setor',
								numero ='$numero',
								telefone ='$telefone',
								datanascimento='datanascimento',
								rgdigitalizado ='$rg',
								observacoes='$observacoes'
									WHERE id ='$id';";

$resultado_funcionario = mysqli_query($conexao, $resultado_edicao_funcionario);

echo  "<script>alert('Edições concluidas com Sucesso!);</script>";
header("Location: index.php");


?>