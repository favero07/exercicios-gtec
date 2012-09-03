<?php
  require_once "includes/functions.php";
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 09</title>
  </head>
  <body>
    <h1>Exercicio 09</h1>
    <a href="/gtec/exerc_9.php">Home</a>
    <a href="/gtec/exerc_9.php?pagina=contato">Contato</a>
    <a href="/gtec/exerc_9.php?pagina=sobremim">Sobre Mim</a>
    <?php
      if ($_GET["pagina"]=="contato") {
        include "includes/contato.php";
      } else if ($_GET["pagina"]=="sobremim")
        include "includes/sobremim.php";
      else {
        include "includes/home.php";
      }
?>

  </body>
</html>