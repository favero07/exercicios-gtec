
<?php
	if(!empty($_POST["n1"]) && !empty($_POST["n2"]) && !empty($_POST["n3"]) && !empty($_POST["n4"])){
		$n1 = $_POST["n1"];
		$n2 = $_POST["n2"];
		$n3 = $_POST["n3"];
		$n4 = $_POST["n4"];

		$media = ($n1 + $n2 + $n3 + $n4) / 4;

		
		if ($media < 3) {
			echo "Mau aluno"."<br/>";
		}
		if($media < 7){
			echo "Voce foi reprovado!"."<br/>";
			echo "Sua media foi $media;";
		}
		else{
			echo "Voce foi aprovado, parabens!"."<br/>";
			echo "Sua media foi $media;";
		}

	}
	else{
		echo "<p>Voce deve prencher todos os campos!</p>";
		echo "<a href = 'exe2.php'>Voltar</a>";
	}
?>
