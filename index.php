<? 
include_once("conexao.php");
include_once("processa.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro de funcionários</title>
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

        <h1>Cadastrar funcionários</h1>
        <br>

        <form method="POST" action="processa.php" onsubmit="">

          Nome: <br>
          <input type="text" name="nomefunc" id="nomefunc" class="campo" maxlength="40" required autofocus><br>
          
          Email<br>
          <input type="text" name="emailfunc" id="emailfunc" class="campo" maxlength="50" required><br>

          Profissão: <br>
          <input type="text" name="profissaofunc" id="profissaofunc" class="campo" maxlength="40" required><br>
          <br>

          Sexo:
          <br>
          <input type="radio"> F
          <input type="radio"> M
          <br>
          <br>

          Setor: <br>
          <select name="sexo" id="sexo" class="campo">
            <option value="F">FINANCEIRO</option>
            <option value="T">TECNOLOGIA</option>
          </select>
          <br>
          <br>
          Numero:<br>
          <input type="number" id="numero" name="" min="10" max="100" class="campo">
          <br> <br>

          Telefone:<br>
          <input type="number" value="telefone" class="campo">
          <br><br>

          Data de nascimento:<br>
          <input type="date" value="datanascimentofunc" class="campo">
          <br><br>

          Insira aqui o RG digitalizado:<br>
          <input type="file" value="" >
          <br><br><br>

          <input type="submit" value="Cadastrar"  class="btn" class="campo" maxlength="40" required>

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



