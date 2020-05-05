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
        </ul>
      </nav>
      <section>

        <h1>Consultas de funcionários</h1>
        <hr><br><br>

        <form method="post" action="processaconsulta.php">

          <input type="submit" value="Consultar"  class="btn" class="campo" maxlength="40" required><br><br>

          <table border="1">

            <tr>
              
              <td>NOME </td>
              <td>E-MAIL </td>
              <td>PROFISSÃO</td>
              <td>SEXO</td>
              <td>SETOR</td>
              <td>NUMERO</td>
              <td>TELEFONE</td>
              <td>DATA NASCIMENTO</td>
              <td>OBSERVAÇÕES</td>

            </tr>
            <?php while($dado = $consultarealizada->fetch_array()){?>
            <tr>
              <td><?php print $dado["nome"];?> </td>
              <td><?php print $dado["email"];?> </td>
              <td><?php print $dado["profissao"];?> </td>
              <td><?php print $dado["sexo"];?> </td>
              <td><?php print $dado["setor"];?> </td>
              <td><?php print $dado["numero"];?> </td>
              <td><?php print $dado["telefone"];?> </td>
              <td><?php print date("d/m/Y", strtotime($dado["datanascimento"]));?> </td>
              <td><?php print $dado["observacoes"];?> </td>
            </tr>
            <?php } ?>

          </table>

        </form>

      </section>
      
    </div>

  </body>

</html>



