<?php
  require_once "includes/functions.php";
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 02</title>
  </head>
  <body>
    <h1>Operações Aritméticas</h1>

    <?php

      $valor1 = 10;
      $valor2 = 20;

      function soma($a, $b){
        return $a + $b . "soma";
      }

      function subtracao($a, $b){
        return $a - $b;
      }

      eco(soma(10, 40) . " ");
      // eco

      $soma = $valor1 + $valor2;
      $subtracao = $valor1 - $valor2;
      $multiplicacao = $valor1 * $valor2;
      $divisao = $valor1 / $valor2;
      $modulo = $valor1 % $valor2;

      eco($soma);
      eco($subtracao);
      eco($multiplicacao);
      eco($divisao);
      eco($modulo);

      echo "<hr/>";

      $parImpar = 13;

      if ($parImpar % 2 == 0) {
        eco("O num é PAR");
      } else{
        eco("O num é IMPAR");
      }

      echo "<hr/>";

      $n1 = 5.67;
      $n2 = 9;
      $n3 = 2.4;
      $n4 = 7;

      $media = ($n1 + $n2 + $n3 + $n4) / 4;

      if($media < 3 ){
        eco("Mau aluno!");
      }

      if($media < 7){
        eco("Está Reprovado!!1");
      }else {
        eco("Está Aprovado!!");
      }

      echo "<hr/>";

      $nome1 = "Joao";
      $sexo1 = "M";
      $nome2 = "Marina";
      $sexo2 = "F";
      $nome3 = "Jessica";
      $sexo3 = "F";

      if ($sexo1 == "M" && $sexo2 == "M" && $sexo3 == "M" ){
          eco("Equipe Masculina.");
      } else if ($sexo1 =="F" && $sexo2 == "F" && $sexo3 == "F"){
          eco("Equipe Feminina.");
      } else {
        eco("Equipe Mista");
      }

      echo ("<hr/>");

      $resposta = "N";

      switch ($resposta) {
        case 'S':
          eco("A resposta é Sim");
          break;
        case 'N':
          eco("A resposta é Não");
          break;
        default:
          eco("Resposta inválida");
          break;
      }

      echo "<hr/>";

      $meses = array("","Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

      $resposta = 4;

      eco($meses[$resposta]);

      switch ($resposta) {
        case 1:
          eco("Janeiro");
          break;
        //...
        case 4: eco("Abril"); break;
        // ...
        default:
          eco("Resposta Inválida");
          break;
      }


      $array["index"] = "value";

      // vetores, listas, matrizes
      $vetor = array("texto");
      $vetor[0] = "texto";
      $vetor["teste"] = "ola mundo";


      // dicionários
      // $pessoa["nome"] = "josé";
      // $pessoa = array("nome" => "josé");

      // //problema
      // $pesso[0];


      // $nome = "Raphael";

      // $lista["Raphael"] = 30;


      //echo $lista[$nome];

      // $matriz[][];

      // $frutas = array("maça");
      // $frutas[] = "pera";


      // for ($i=0; $i < count($frutas); $i++) {
      //   eco($frutas[$i]);
      // }







    ?>

















  </body>
</html>