<html>
	<head>
		<title>array</title>
	</head>
	<body>
		<?php 
			$frutas = array(0 => "Uva" ,1 => "ma&ccedila",2 => "pera",3 => "laranja");
			list($fruta1 ,$fruta2 ,$fruta3) = $frutas;
			/*for ($i=0; $i < count($frutas); $i++) { 
				echo "$frutas[$i]"."<br/>";
			}*/

			echo "{$frutas['1']}"."<br/>";
			echo "$fruta1"."<br/>";
			foreach ($frutas as $fruta) {
				echo "Voce gosta de $fruta?"."<br/>";
			}
		 ?>
	</body>
</html>