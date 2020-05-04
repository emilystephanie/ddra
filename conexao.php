<?php
//conexão de acesso ao banco de dados

$hostname ="localhost";
$user ="root";
$password="";
$database="ddra";
$conexao = mysqli_connect($hostname,$user,$password,$database);
//se não realizar a conexão apresenta um erro
if(!$conexao){
	
	print("Falha na conexão com o banco de dados");
}

?>