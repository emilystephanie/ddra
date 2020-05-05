<?php

include_once("conexao.php");

$result_funcionario = "SELECT * FROM funcionarios where id ='3'";
$resultado_final_usuario = mysqli_query($conexao, $result_funcionario);
$row_funcionario = mysqli_fetch_assoc($resultado_final_usuario);

?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <title>Excluir funcionários</title>
    <link rel="stylesheet" type="text/css" href="css/estrutura.css">

  </head>

  <body>
    <div class="container">
      <nav>
        <ul class="menu">
          <a href="index.php"><li>Cadastro</li></a>
          <a href="consultas.php"><li>Consultas</li></a>
          <a href="edicao.php"><li>Edições</li></a>
          <a href="exclusao.php"><li>Excluir Cadastro</li></a>

        </ul>
      </nav>
      <section>

        <h1>Excluir funcionários</h1>
        <br>

        <form method="post" action="processaexclusao.php">

          <input type="hidden" name="id" value="<?php print $row_funcionario['id'];?>">

          Nome: <br>
          <input type="text" name="nomefunc" value="<?php echo  $row_funcionario['nome'];?>" placeholder="Nome Completo" id="nomefunc" class="campo" maxlength="40" required autofocus><br>
          
          Email<br>
          <input type="text" name="emailfunc" value="<?php echo  $row_funcionario['email'];?>" placeholder="Digite seu e-mail"  id="emailfunc" class="campo" maxlength="50" required><br>

          Profissão: <br>
          <input type="text" name="profissaofunc" value="<?php echo  $row_funcionario['profissao'];?>" id="profissaofunc" class="campo" maxlength="40" required><br>
          <br>

          Sexo:
          <br>
          <input type="radio" id="sexofeminino" name="sexofeminino"> F
          <input type="radio" id="sexomasculino" name="sexomasculino"> M
          <br>
          <br>

          Setor: <br>
          <select name="setor" id="setor" value="<?php echo  $row_funcionario['setor'];?>" class="campo">
            <option value="F">FINANCEIRO</option>
            <option value="T">TECNOLOGIA</option>
          </select>
          <br>
          <br>

          Numero:<br>
          <input type="number" id="numero" value="<?php echo  $row_funcionario['numero'];?>"  placeholder="Digite o código do funcionário" name="numero" min="10" max="100" class="campo">
          <br> <br>

          Telefone:<br>
          <input type="number" id="telefone" name="telefone" value="<?php echo  $row_funcionario['telefone'];?>" class="campo">
          <br><br>

          Data de nascimento:<br>
          <input type="date" value="<?php echo  $row_funcionario['datanascimento'];?>" name="datanascimentofunc" id="datanascimentofunc" class="campo">
          <br><br>

          Insira aqui o RG digitalizado:<br>
          <input type="file" value="" >
          <br><br><br>

          Observações:
          <br>
         <textarea name="observacoes" value="<?php echo  $row_funcionario['observacoes'];?>" id="observacoes" class="campo"></textarea>

          <br><br>

          <input type="submit" value="Excluir"  class="btn" class="campo" maxlength="40" required>

        </form>
        
      </section>
      
    </div>

  </body>

</html>



