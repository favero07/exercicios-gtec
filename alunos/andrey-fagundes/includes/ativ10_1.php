  <?php
  	if(!empty($_POST)){
		$login["usuario"] = $_POST["usuario"];
		$login["senha"] = md5($_POST["senha"]);
		
		echo "<p>Usu&aacute;rio: ".$login['usuario']."</p>";
		echo "<p>Senha: ".$login['senha']."</p>";
	}else{
		echo "<h1>ERRO!</h1>";	
	}
	
  ?>
