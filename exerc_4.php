<?php
  require_once "includes/functions.php";
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 04</title>
  </head>
  <body>
    <h1>Exercicio 04</h1>

    <p>Soma: <?php echo soma(23, 45);?></p>
    <p>Subtração: <?= subtracao(23, 12);?></p>

    <hr>

    <p><?php echo calcula(12, 2, 'divisao') ?></p>
  </body>
</html>