<?php
  require_once "../includes/functions.php";

  // validacoes
  function validaAno($ano){
    if (preg_match('/^\d{4}$/', $ano)) {
      return true;
    }
    return false;
  }

  function validaEmail($email){
    if (preg_match('/^([0-9a-zA-Z]+([_.-]?[0-9a-zA-Z]+)*@[0-9a-zA-Z]+[0-9,a-z,A-Z,.,-]*(.){1}[a-zA-Z]{2,4})+$/', $email)) {
      return true;
    }
    return false;
  }

  // function mostraCampos

  // tratando formulario, se foi enviado o POST via form
  if (isset($_POST) && !empty($_POST)) {

    // Todos os campos são obrigatorios
    if (!empty($_POST["player1"]) &&
        !empty($_POST["player2"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["ano"]) &&
        !empty($_POST["band"])
       ) {
      $player1 = $_POST["player1"];
      $player2 = $_POST["player2"];
      $email = $_POST["email"];
      $ano = $_POST["ano"];
      $nomeBanda = $_POST["band"];

      // validando email
      if(!validaEmail($email)){
        echo "<h1>O email est&aacute; inv&aacute;lido!</h1>";
        echo " - <a href='/gtec/exerc_8.php'>Voltar</a>";
        // exit;
      } else if (!validaAno($ano)) {
        echo "<h1>O ano est&aacute; inv&aacute;lido!</h1>";
        echo " - <a href='/gtec/exerc_8.php'>Voltar</a>";
        // exit;
      } else{
        eco($nomeBanda);
        eco($player1);
        eco($player2);
        eco($email);
        eco($ano);
      }

      // senao for campos preenchidos
    } else {
      echo "<h1>Todos os campos s&atilde;o obrigat&oacute;rios!</h1>";
      echo " - <a href='/gtec/exerc_8.php'>Voltar</a>";
    }


    //senao for enviado POST
  } else {
    // header("Location: http://")
    echo "<h1>Acesso inv&aacute;lido!</h1>";
    echo " - <a href='/gtec/exerc_8.php'>Voltar</a>";
  }


