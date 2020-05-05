<?php

//para iniciar a conexão com o banco de dados buscando do arquivo conexão, ou seja, não precisa criar varias vezes, somente usar o include_once
include_once("conexao.php");

$consulta_funcionarios = "SELECT nome FROM funcionarios";

$consulta_func = mysql_query($consulta_funcionarios) or die(mysql_error());

//$consulta_func = $mysqli->query($consulta_funcionarios);

if(mysqli_num_rows($consulta_func) > 0){

  $consultarealizada = mysqli_fetch_assoc($consulta_func);
  print('realizou consulta');


}else{
  
  print("Não efetuou a consulta");
}

?>

