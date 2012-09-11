<?php  
	if(isset($_POST["texto"]) && !empty($_POST["texto"])){	
		$num = $_POST["texto"];
		if ($num % 2 == 0) {
			echo "&Eacute par";
		}
		else{
			echo "&Eacute impar";
		}
	}
	else{
		echo "<p>"."Voce deve prencher o campo"."</p>";
		echo "<a href = 'exe1.php'>Voltar</a>";
	}
	?>