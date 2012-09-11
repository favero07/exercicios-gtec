<?php 
	if(isset($_POST) && !empty($_POST)){	
		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobre"];
		$email = $_POST["email"];
		$comentario = $_POST["comentario"];
	}
?>


<header>
	<h1 class = "titulo">Seja bem vindo!</h1>

	<?php 
		if(isset($nome)){
			echo "<p class = 'left'>".$nome. " " . $sobrenome."</p>";
			echo "<p class = 'left'>".$email."</p>";
		}
	 ?>
</header>


<aside>
	<?php
		if(isset($_POST) && !empty($_POST)){
		 	echo "<p>".$comentario."</p>";
		}
	?>
</aside>
