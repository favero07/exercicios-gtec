<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Churrasco</title>
	<style>
		h1{
			text-align:center;	
		}
	</style>
</head>

<body>
	<?php
		$lista = array(0 => "Picanha",1 => "Galeto",2 => "Mignon",3 => "Coraçao",4 => "Cerveja",5 => "Carvão",6 => "Espeto",7 => "Sal",8 => "Alface"); 
	?>
    
    <!-- <pre><?php var_dump($lista); ?> </pre> -->
    <hr />
    <p>Lista de churrasco</p>
    <ul>
    	<?php for($i=0;$i< count($lista); $i++){ ?>
    		<li><?php echo "Posicao: $i, Item: $lista[$i]"; ?></li>
        <?php } ?>
    </ul>
    
</body>
</html>