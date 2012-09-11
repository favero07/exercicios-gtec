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
		$media = ($_POST["n1"] + $_POST["n2"] + $_POST["n3"] + $_POST["n4"])/4;
		if($media>=7){
			echo "Aluno Aprovado";	
		}else{
			echo "Aluno Reprovado";	
		}
	?>
    </h2>
</body>
</html>