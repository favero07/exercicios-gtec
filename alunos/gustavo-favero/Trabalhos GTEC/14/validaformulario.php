<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Informaçoes</title>
	<style>
		h1{
			text-align:center;	
		}
	</style>
</head>

<body>
	<h1>Resultado</h1>

	<?php
		require_once("index.php");
		
		function erros($num,$campo){
			$msg = array(
				0 => "Preencha o campo " . $campo . ".<br/>",
				1 => "Campo ". $campo . " inválido<br/>",
				);
			return $msg[$num];
		}
		
		function eco($texto){
			echo "<p>" . $texto . "</p>";	
		}

		$musicas = $_POST["musicas"];
		$musica = explode(",", $_POST["musicas"]);
	
		$bandaregex="/^[a-záàâãÁÀÂÃéêÉÊíÍóôÓÔúÚçÇ0-9_.-]+$/i";
		$nomeregex ="/^[a-záàâãÁÀÂÃéêÉÊíÍóôÓÔúÚçÇ]+(\s[a-záàâãÁÀÂÃéêÉÊíÍóôÓÔúÚçÇ]+){1,2}\s*$/i";
		$emailregex = "/^[a-z0-9_.-]+@[a-z0-9.-]+\.[a-z]{2,4}$/i";
		$anoregex="/[0-9]+/";
		
		if(isset($_POST["submetido"]) && $_POST["submetido"]==1){//validar formulário
			$banda = $_POST["banda"];
			$nome1 = $_POST["nome1"];
			$nome2 = $_POST["nome2"];
			$email = $_POST["email"];
			$ano = $_POST["ano"];	
			
			if(empty($_POST["banda"])){ 
				if(empty($banda)){
					echo erros (0,"banda");
					$temErro = 1;
					$bandaerro = 1;
				}
			}elseif(!preg_match($bandaregex,$banda)){
				echo erros(1,"banda");
				$temErro = 1;
				$bandaerro = 1;
			}
			
			if(empty($_POST["nome1"])){ 
				if(empty($nome1)){
					echo erros (0,"nome1");
					$temErro = 1;
					$nome1erro = 1;
				}
			}elseif(!preg_match($nomeregex,$nome1)){
				echo erros(1,"nome1");
				$temErro = 1;
				$nome1erro = 1;
			}
	
			if(empty($_POST["nome2"])){ 
				if(empty($nome2)){
					echo erros (0,"nome2");
					$temErro = 1;
					$nome2erro = 1;
				}
			}elseif(!preg_match($nomeregex,$nome2)){
				echo erros(1,"nome2");
				$temErro = 1;
				$nome2erro = 1;
			}
			
			if(empty($_POST["email"])){
				if(empty($email)){
					echo erros (0,"email");
					$temErro = 1;
					$emailerro = 1;
				}
			}elseif(!preg_match($emailregex, $email)){
				echo erros(1,"email");
				$temErro = 1;
				$emailerro =1;
			}		
		
			if(empty($_POST["ano"])){ 
				if(empty($ano)){
					echo erros (0,"ano");
					$temErro = 1;
					$anoerro = 1;
				}
			}elseif(!preg_match($anoregex,$ano)){
				echo erros(1,"ano");
				$temErro = 1;
				$anoerro = 1;
			}	
		}//fecha if isset
		if(empty($temErro)){
			?><p align="center">
				<?php echo "<br>Formulário enviado!<br>"; 
					  echo "<br>Banda " . $_POST["banda"] . "<br>";						  echo "<br>Integrantes " . $_POST["nome1"] . " e " . $_POST["nome2"] . ".<br>";
					  echo "<br>Email: " . $_POST["email"] . "<br>";
					  echo "<br>Ano de criação: " . $_POST["ano"] . "<br>";
						  //echo $musica[0];
					  echo "<br>Musicas:";
					  foreach($musica as $index => $value){
						  	echo "<br>$index: $value";
					  }
				?>
            </p>
	<?php
		}
	?> 
</body>
</html>