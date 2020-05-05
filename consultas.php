<?php

include_once("conexao.php");

$result_funcionario = "SELECT * FROM funcionarios";
$resultado_final_usuario = mysqli_query($conexao, $result_funcionario);
$row_funcionario = mysqli_fetch_assoc($resultado_final_usuario);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <title>Consultar funcionários</title>
    <link rel="stylesheet" type="text/css" href="css/estrutura.css">

  </head>

  <body>
    <div class="container">

      <nav>
        <ul class="menu">
          <a href="index.php"><li>Cadastro</li></a>
          <a href="consultas.php"><li>Consultas</li></a>
          <a href="Edicao.php"><li>Edições</li></a>
          <a href="exclusao.php"><li>Excluir Cadastro</li></a>
        </ul>
      </nav>

      <section>

        <h1>Consultas de funcionários</h1>
        <hr><br><br>

          <table border="1">

            <tr>
              
              <td>NOME </td>
              <td>E-MAIL </td>
              <td>SETOR</td>
              <td>NUMERO</td>
              <td>TELEFONE</td>
              <td>DATA NASCIMENTO</td>
              <td></td>

            </tr>
            <?php ?>

            <tr>
              <td><?php print $row_funcionario["nome"];?> </td>
              <td><?php print $row_funcionario["email"];?> </td>
              <?php if($row_funcionario["setor"] == 'F'){ ?>
                <td>FINANCEIRO</td>
              <?php } else{?>
                <td>TECNOLOGIA</td>
              <?php }?>

              <td><?php print $row_funcionario["numero"];?> </td>
              <td><?php print $row_funcionario["telefone"];?> </td>
              <td><?php print date("d/m/Y", strtotime($row_funcionario["datanascimento"]));?> </td>

            </tr>
            <?php  ?>

          </table>

      </section>
      
    </div>

  </body>

</html>



