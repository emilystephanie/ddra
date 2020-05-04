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
        <h1>Consultas de funcionários</h1>
        <hr><br><br>

        <form method="get" action="processa.php"></form>
          
          <input type="submit" value="Consultar" onclick="Consultar();"  class="btn">

           <br><br>

           Nome<br>
            <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
            Email<br>
            <input type="text" name="email" class="campo" maxlength="50" required><br>

            Profissão<br>
            <input type="text" name="profissao" class="campo" maxlength="40" required><br>
      </section>
      
    </div>

<script type="text/javascript">

  
function Consultar{

  alert('ola');
}

</script>
  </body>

</html>



