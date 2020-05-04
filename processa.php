<?php

//para iniciar a conexão com o banco de dados buscando do arquivo conexão, ou seja, não precisa criar varias vezes, somente usar o include_once
include_once("conexao.php");


//para finalizar a conexao com o banco
mysqli_close($conexao);

?>