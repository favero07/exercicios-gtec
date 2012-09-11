<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resultado</title>	
	<style>
		h1{
			text-align:center;	
		}
	</style>
</head>

<body>
	<h1>Resultado</h1>
    <h2>
    <?php
		$sexo1 = $_POST["sexo1"];
		$sexo2 = $_POST["sexo2"];
		$sexo3 = $_POST["sexo3"];
		if($sexo1 == "Masculino"){
			if($sexo2 == "Masculino" || $sexo3 == "Masculino"){
				echo "Sexo predominante é Masculino";
			}else{
				echo "Sexo predominante é Feminino";	
			}
		}else if($sexo1 == "Feminino"){
			if($sexo2 == "Feminino" || $sexo3 == "Feminino"){
				echo "Sexo predominante é Feminino";	
			}else{
				echo "Sexo predominante é Masculino";	
			}
		}
	?>
    </h2>
</body>
</html>