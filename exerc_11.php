<?php
  require_once "class/carro.class.php";
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 11</title>
  </head>
  <body>

    <?php
      $carro = new Carro();

      // $carro->placa;

      $carro->setPlaca("NFE-12345");

      echo "<p>" . $carro->getPlaca(). "</p>";

    ?>


  </body>
</html>

