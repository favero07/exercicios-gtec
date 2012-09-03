<?php
  require_once "includes/functions.php";
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 05</title>
  </head>
  <body>
    <h1>Exercicio 05</h1>

    <?php
      $empresas = array("Apple", "Nokia", "Samsung");
      //$empresas = array(0 => "Apple", 1 => "Nokia", 2 => "Samsung");
    ?>

    <p>Mostrando os 3 primeiros itens:</p>
    <pre> <?php var_dump($empresas); ?></pre>

    <?php
      $empresas[] = "Microsft";
      $empresas[] = "Oracle";
      $empresas[] = "Hueb Labs";
    ?>

    <p>Mostrando o array completo com os novos itens:</p>
    <pre><?php var_dump($empresas); ?></pre>

    <hr/>

    <p>Lista de Empresas - usando FOR</p>
    <ul>
      <?php for ($i=0; $i < count($empresas); $i++) { ?>
        <li><?php echo "Indice: $i, Valor: $empresas[$i]"; ?></li>
      <?php } ?>
    </ul>


    <p>Lista de Empresas - usando o FOREACH</p>
    <ul>
      <?php foreach($empresas as $index => $value) { ?>
        <li><?php echo "Indice: $index, Valor: $value"; ?></li>
      <?php } ?>
    </ul>



    <?php
      $pc1["processador"] = "AMD K6-2 500";
      $pc1["memoria"] = "256MB";
      $pc1["hd"] = "20GB";

      $pc2["processador"] = "Intel Pentium 4";
      $pc2["memoria"] = "2GB";
      $pc2["hd"] = "400GB";
    ?>
    <hr>
    <p>Mostrar PC1</p>
    <ul>
      <?php foreach ($pc1 as $caracteristica => $valor) { ?>
        <li>
          <strong><?= $caracteristica; ?>: </strong>
          <?= $valor; ?>
        </li>
      <?php }?>
    </ul>

    <p>Mostrar PC2</p>
    <ul>
      <?php foreach ($pc2 as $caracteristica => $valor) { ?>
        <li>
          <strong><?= $caracteristica; ?>: </strong>
          <?= $valor; ?>
        </li>
      <?php }?>
    </ul>

    <?php
      $laboratorio = array($pc1, $pc2);
    ?>

    <p>Mostrar Laboratório</p>
    <ul>
      <?php for ($j=0; $j < count($laboratorio); $j++) { ?>
        <li>
          <p><strong>Computador <?= $j + 1; ?></strong></p>
          <ul>
            <?php foreach ($laboratorio[$j] as $caracteristica => $valor) { ?>
              <li>
                <strong><?php echo $caracteristica; ?>: </strong>
                <?php echo $valor; ?>
              </li>
            <?php }?>
          </ul>
        </li>
      <?php }?>
    </ul>



  </body>
</html>