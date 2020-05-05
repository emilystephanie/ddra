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

        <form method="get" action="processa.php"></form>
          
          <input type="submit" value="Consultar" onclick="Consultar();"  class="btn">



      </section>
      
    </div>

<script type="text/javascript">

  
function Consultar{

  alert('ola');
}

</script>
  </body>

</html>



