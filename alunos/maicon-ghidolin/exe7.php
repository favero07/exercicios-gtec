<html>
	<head>
		<title>array</title>
	</head>
	<body>

		<!--array das empresas-->
		<?php 
			$empresas = array("Aple", "Microsoft","Oracle");
			/*$empresas = array(0 =>"Aple", 1 =>"Microsoft",2 =>"Oracle");*/

			/*$empresas[] = "microsoft";
			$empresas[] = "sansung";
			$empresas[] = "motorola";*/


		 ?>
		 <pre><?php  var_dump($empresas); ?></pre>


		 <!--array do crurrasco-->
		 <?php 
		 	$churas = array("carne", "sal","carvao","pao","salada","cerveja","coca");
		 	$churas[0];
		  ?>
		<ul>
		 	<?php foreach ($churas as $indice => $value) {?>
		  		<li> <?php echo $value; ?></li>
		  	<?php } ?>
		</ul>



		<!--array de computadores	-->
		<?php
			$comp1 = array("processador" => "Intel i3", "memoria" => "8GB Ram", "tela" => "17\"");
			$comp2 = array("processador" => "Intel i7", "memoria" => "4GB Ram", "tela" => "14\"");
		?>
		<ul>
			<strong>Computador 1</strong>
		 	<?php foreach ($comp1 as $indice => $value) {?>
		  		<li>
		  			<?php echo "$indice: $value"; ?>
		  		</li>
		  	<?php } ?>
		</ul>

		<ul>
			<strong>Computador 2</strong>
		 	<?php foreach ($comp2 as $indice => $value) {?>
		  		<li>
		  			<?php echo "$indice: $value"; ?>
		  		</li>
		  	<?php } ?>
		</ul>

		<!--array dentro de array-->
		<br/><br/>
		<?php 
			$informatica = array($comp1, $comp2);
		 ?>
		 <ul>
			 <?php for ($i=0; $i < count($informatica); $i++) {  ?>
				<li><strong> Computador <?php echo $i+1;?>   </strong></li>
			 	
			 	<?php foreach ($informatica[$i] as $key => $value) { ?>
			 		<li> <?php echo "$key : $value"; ?> </li>
			 	<?php }?>
			 		
			 <?php }?>
		 </ul>
		 
	</body>
</html>