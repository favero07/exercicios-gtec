<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Laboratorio Informatica</title>
	<style>
		h1{
			text-align:center;	
		}
	</style>
</head>

<body>
	<?php 
		$computador["processador"] = "Intel Core I7 - 3.06GHZ, 4.8GT/SEG, 8M"; 
		$computador["memoria"] = "8GB";
		$computador["video"] = "ATI RADEON 450";
		$computador["rede"] = "Broadcom 5709";
	
		$computador2["processador"] = "Intel Core I5 - 2.23GHZ";
		$computador2["memoria"] = "6GB";
		$computador2["video"] = "NVIDIA GFORCE 8600GX";
		
		$computador3["processador"] = "AMD Athlon 2400MHZ";
		$computador3["memoria"] = "2GB";
		$computador3["video"] = "Intel Media Graphics 128MB";
		$computador3["rede"] = "Broadcom 6008";
	?>
    
    <pre><?php print_r($computador); ?> </pre>
    <ul>
    	<li><?php foreach($computador as $index => $value){ ?></li>
        	<li><?php echo "Item $index: $value"; ?></li>
        <?php } ?>
    </ul>

    <!--<pre><?php print_r($computador2); ?> </pre> -->
    <ul>
    	<li><?php foreach($computador2 as $index => $value){ ?></li>
        	<li><?php echo "Item $index: $value"; ?></li>
        <?php } ?>
    </ul>
    
    <?php
		$laboratorio = array($computador, $computador2,$computador3);
	?>
 
    <p>Mostrar Laboratorio</p>
    <ul>
    	<li><?php  for($i=0;$i < count($laboratorio);$i++){ ?>     	
            		<p><strong>Computador <?= $i+1; ?></strong></p></li>
                	<?php foreach($laboratorio[$i] as $index => $value){ ?>
                    <li><?php echo "$index : $value"; ?></li>
                    <?php } ?>       
		<?php } ?>
    </ul>
</body>
</html>