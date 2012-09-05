<?php

  $senhaBanco = '202cb962ac59075b964b07152d234b70';


  if (!empty($_POST)) {
    $login["usuario"] = $_POST["usuario"];
    $login["senha"] = md5($_POST["senha"]);

    echo "<p>Usu&aacute;o: " . $login['usuario']. "</p>";
    echo "<p>Senha: ".$login['senha'] ."</p>";

    if ($senhaBanco !== $login["senha"]) {
      echo "<p> Usu&aacute;rio ainda n&atilde;o cadastrado";
    }

  } else{
    echo"<h1>Erro</h1>";
  }

