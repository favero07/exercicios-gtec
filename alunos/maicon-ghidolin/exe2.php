<html>
	<head>
		<title>Media</title>
	</head>
	<body>
		<?php
			$n1 = 2;
			$n2 = 2;
			$n3 = 2;
			$n4 = 2;

			$media = ($n1 + $n2 + $n3 + $n4) / 4;

			
			if ($media < 3) {
				echo "Mau aluno"."<br/>";
			}
			if($media < 7){
				echo "ops, voce foi reprovado!"."<br/>";
				echo "Sua media foi $media;";
			}
			else{
				echo "Voce foi aprovado, parabens!"."<br/>";
				echo "Sua media foi $media;";
			}
		?>
	</body>
</html>