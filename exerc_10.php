<?php
  require_once "includes/functions.php";
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 10</title>
  </head>
  <body>
    <h1>Exercicio 10</h1>

    <form action="form/login.php" method="POST">
      <p>
        <label for="login">Usuário:</label><br/>
        <input type="text" name="usuario" id="login"/>
      </p>

      <p>
        <label for="senha">Senha:</label><br/>
        <input type="password" name="senha" id="senha">
      </p>

      <p><button>Logar</button></p>
    </form>

  </body>
</html>