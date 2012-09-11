<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Formulario</title>
	<style>
		h1{
			text-align:center;	
		}
	</style>
</head>

<body>
	<h1>Exercicio 05</h1>
    
    <?php
		//$empresas = array("Apple","Nokia","Samsung");
		$empresas = array(0 => "Apple",1 => "Nokia",2 => "Samsung");
	?>
	<p>Mostrar os 3 primeiros itens:</p>
    <pre><?php var_dump($empresas); ?></pre>
    
    <?php
		$empresas[]="Microsoft";
		$empresas[]="Oracle";
		$empresas[]="Hueb Labs";
	?>
    <p>Mostrando o array completo com os novos itens:</p>
    
    <pre><?php var_dump($empresas); ?></pre>
	
    <hr />
    <p>Lista de empresas - Usando FOR</p>
    <ul>
    	<?php for($i=0;$i< count($empresas); $i++){ ?>
    		<li><?php echo "Posicao: $i, Valor: $empresas[$i]"; ?></li>
        <?php } ?>
    </ul>
    
    <p>Lista de Empresas - usando FOREACH</p>
    <ul>
		<?php foreach($empresas as $index => $value){ ?>
			<li><?php echo "Posicao: $index, Valor: $value"; ?></li> 
		<?php } ?>
    </ul>
	
    <?php 
		$computador["processador"] = "AMD K6-2 500";
	?>

</body>
</html>