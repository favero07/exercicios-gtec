<?php

  function eco($param1){
    echo "<p>".$param1 ."</p>";
  }

  function soma($a, $b){
    return $a + $b;
  }

  function subtracao($a, $b){
    return $a - $b;
  }

  function multiplicacao($a, $b){
    return $a * $b;
  }

  function divisao($a, $b){
    return $a / $b;
  }

  function modulo($a, $b){
    return $a % $b;
  }

  function calcula($a, $b, $op = "soma"){
    switch ($op) {
      case 'soma':
        return soma($a, $b);
        break;
      case 'divisao':
        return divisao($a, $b);
        break;
      case 'subtracao':
        return subtracao($a, $b);
        break;
      default:
        return "operacao inválida";
        break;
    }


  }
