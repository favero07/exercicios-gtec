<?php 
	require_once "camputador.class.php";
 ?>
 <html>
	 <head>
	 	<title>Computador</title>
	 </head>
	 <body>
	 	<?php 
	 		$numserie = new computador();
	 		$chaveproduto= new computador();

	 		//numero de serie computador

	 		$numserie->setnumeroserie("1234-6521-6547-9651");
	 		$chaveproduto->setchave("A5R5-6YFG-48YU-SAE4-54TG");

	 		ligar();
	 		echo "<p>"."Numero de serie: ".$numserie->getnumeroserie()."</p>";
	 		echo "<p>"."Chave do produto: ".$chaveproduto->getchaveproduto()."</p>"
	 		desligar();
	 	 ?>
	 </body>
 </html>