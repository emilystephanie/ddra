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
          <a href="edicao.php"><li>Edições</li></a>
          <a href="exclusao.php"><li>Excluir Cadastro</li></a>
        </ul>
      </nav>
      <section>

        <h1>Cadastrar funcionários</h1>
        <br>

        <form method="post" action="processa.php">

          Nome: <br>
          <input type="text" name="nomefunc" placeholder="Nome Completo" id="nomefunc" class="campo" maxlength="40" required autofocus><br>
          
          Email<br>
          <input type="text" name="emailfunc" placeholder="Digite seu e-mail"  id="emailfunc" class="campo" maxlength="50" required><br>

          Profissão: <br>
          <input type="text" name="profissaofunc" id="profissaofunc" class="campo" maxlength="40" required><br>
          <br>

          Sexo:
          <br>
          <input type="radio" id="sexofeminino" name="sexofeminino"> F
          <input type="radio" id="sexomasculino" name="sexomasculino"> M
          <br>
          <br>

          Setor: <br>
          <select name="setor" id="setor" class="campo">
            <option value="F">FINANCEIRO</option>
            <option value="T">TECNOLOGIA</option>
          </select>
          <br>
          <br>

          Numero:<br>
          <input type="number" id="numero" placeholder="Digite o código do funcionário" name="numero" min="10" max="100" class="campo">
          <br> <br>

          Telefone:<br>
          <input type="number" value="telefone" id="telefone" name="telefone" class="campo">
          <br><br>

          Data de nascimento:<br>
          <input type="date" value="datanascimentofunc" name="datanascimentofunc" id="datanascimentofunc" class="campo">
          <br><br>

          Insira aqui o RG digitalizado:<br>
          <input type="file" value="" >
          <br><br><br>

          Observações:
          <br>
         <textarea name="observacoes" id="observacoes" class="campo"></textarea>

          <br><br>

          <input type="submit" value="Cadastrar"  class="btn" class="campo" maxlength="40" required>

        </form>
        
      </section>
      
    </div>

  </body>

</html>



