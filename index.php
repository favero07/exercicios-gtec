<?php
  $title = "Site.com";
  $subtitle = "o melhor site do mundo";

  $textoConcatenado = "$title - $subtitle";
  $textoConcatenado = $title . " - " . $subtitle;

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $textoConcatenado ?></title>
  </head>
  <body>
    <h1>Página PHP</h1>

    <?php
      //phpinfo();

      /*
        Comentario
        varias linhas
      */

        $variavel = "valor";
        $numero = 2;
        $reais = 3.56;
        $boolean = true;
        $vetor = array();
        $variavel = 45;

        $numero2 = '2';

        $valor = "porquinhos 5" + 5;

        echo $valor;

    ?>

    <p>abaixo é o footer</p>

    <footer>
      <p>&reg; Copyright -
        <?php echo $title . " - " . date("Y"); ?></p>
    </footer>

  </body>
</html>