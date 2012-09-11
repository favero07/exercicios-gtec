<?php 
	require_once "function.php";

	if(isset($_POST) && !empty($_POST)){

		//verifica os campos obrigatorios

		if(!empty($_POST["dupla"])&& 
			!empty($_POST["cantor1"])&& 
			!empty($_POST["cantor2"])&& 
			!empty($_POST["email"])&& 
			!empty($_POST["ano"])&&
			!empty($_POST["musicas"])
		){
			 $dupla = $_POST["dupla"]; 	 
			 $cantor1 = $_POST["cantor1"];
			 $cantor2 = $_POST["cantor2"]; 
			 $email = $_POST["email"];
			 $ano = $_POST["ano"];
			 $musicas = explode(",",$_POST["musicas"]);

			 //valida email
			 if(validaemail($email)){

			 	//valida ano
			 	if(validaano($ano)){
				 	eco($dupla);
				 	eco($cantor1);
				 	eco($cantor2);
				 	eco($email);
				 	eco($ano);
				 	eco($musicas);
				 }
				 else{
				 	echo "<p>Campo ano invalido!"."<br/></p>";
					echo "<a href = 'exe10.php'>Voltar</a>";
				 }
			}
			else{
				echo "<p>Campo email invalido!"."<br/></p>";
				echo "<a href = 'exe10.php'>Voltar</a>";
			}
		}
		else{ 
			echo "<p>Todos os campos sao obrigatorios!"."<br/></p>";
			echo "<a href = 'exe10.php'>Voltar</a>";
		}
	} 



 ?>


<html>
	<head>
		<title>Exibir</title>
	</head>
	
</html>