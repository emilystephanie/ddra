<?php

//para iniciar a conexão com o banco de dados buscando do arquivo conexão, ou seja, não precisa criar varias vezes, somente usar o include_once
include_once("conexao.php");
$result_funcionario = "SELECT * FROM funcionarios where id='3'";
$resultado_final_usuario = mysqli_query($conexao, $resultado_funcionario);
$row_funcionario = mysqli_fetch_assoc($resultado_final_usuario);

$id=$_POST['id'];

$resultado_exclusao_funcionario = "DELETE FROM funcionarios WHERE id='$id';";

$resultado_funcionario = mysqli_query($conexao, $resultado_exclusao_funcionario);

echo  "<script>alert('Edições concluidas com Sucesso!);</script>";
header("Location: index.php");


?>