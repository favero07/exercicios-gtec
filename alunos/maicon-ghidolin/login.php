
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

		if(isset($_POST) && !empty($_POST)){
			if(!empty($_POST["nome"]) && !empty($_POST["senha"])){

				$senhabanco = "202cb962ac59075b964b07152d234b70";
				$nome = $_POST["nome"];
				$senha = md5($_POST["senha"]);
			
				if($senhabanco == $senha){
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

		}
		else{
			echo "<h1>"."Error"."</h1>";
		}
	 ?>
</body>
</html>