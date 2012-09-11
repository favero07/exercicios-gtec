
<?php 

	if(isset($_POST) && !empty($_POST)){
		if(!empty($_POST["nome"]) && !empty($_POST["senha"])){

		
			$nome = $_POST["nome"];
			$senha = md5($_POST["senha"]);
		
			echo "<p>"."Nome: ".$nome."</p>";
			echo "<p>"."Senha: ".$senha."</p>";
			
		}
		else{
			echo "<h1>"."Error"."</h1>";
		}

	}
	else{
		echo "<h1>"."Error"."</h1>";
	}
 ?>
