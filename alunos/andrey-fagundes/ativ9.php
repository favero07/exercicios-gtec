<?php
  require_once "includes/functions.php";
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ativ9</title>
  </head>
  <body>
    <h1>Exercicio 09</h1>
    <a href="/gtec/ativ9.php">Home</a>
    <a href="/gtec/ativ9.php?pagina=contato">Contato</a>
    <a href="/gtec/ativ9.php?pagina=sobremim">Sobre Mim</a>
    <?php
      if (@$_GET["pagina"]=="contato") {
        include "ativ8.php";
      } else if (@$_GET["pagina"]=="sobremim")
        include "includes/sobremim.php";
      else {
        include "includes/home.php";
      }
?>

  </body>
</html>