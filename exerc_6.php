<?php
  require_once "includes/functions.php";
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 06</title>
  </head>
  <body>
    <h1>Exercicio 06</h1>

    <?php
      $valor1 = "texto";
      $valor2 = 123;
      $valor3 = 45.67;
      $valor4 = array("peste bubonica", "lepra", "cancer");
      $valor5 = true;
      $valor6 = -123;
      $valor7 = "456";
      $valor8 = "3 porquinhos";

      eco(gettype($valor1));

      eco(gettype($valor2));
?>
<pre>
  <?php
      // String para Integer
      var_dump((int)$valor1); // 0
      var_dump((int)$valor7); // 456 (inteiro)
      var_dump((int)$valor8); // 3


    ?>
</pre>



  </body>
</html>