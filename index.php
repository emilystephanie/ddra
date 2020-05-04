<? 
include_once("conexao.php");
include_once("processa.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Sistema de cadastro</title>
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
        <h1>Cadastro de funcionários</h1>
        <hr><br><br>

        <form method="POST" action="processa.php" onsubmit="">

          <br><br>

          Nome: <br>
          <input type="text" name="nomefunc" id="nomefunc" class="campo" maxlength="40" required autofocus><br>
          
          Email<br>
          <input type="text" name="emailfunc" id="emailfunc" class="campo" maxlength="50" required><br>

          Profissão: <br>
          <input type="text" name="profissaofunc" id="profissaofunc" class="campo" maxlength="40" required><br>

          Sexo: <br>
          <select name="sexo" id="sexo">
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>
          </select>
          <br>
          <br>
          <br>

          <input type="submit" value="Cadastrar"  class="btn">

        </form>

        <script >
          
          function Cadastrar(){

            var nome = document.getElementeById("nomefunc").value;
            var email = document.getElementeById("emailfunc").value;
            var profissao = document.getElementeById("profissaofunc").value;

          }
        </script>
        
      </section>
      
    </div>

  </body>

</html>



