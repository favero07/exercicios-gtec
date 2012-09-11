<html>
	<head>
		<title>conversao</title>
	</head>
	<body>
		<?php 
			$var1 = "texto";
			$var2 = 123;
			$var3 = 45.67;
			$var4 = array("peste" , "lepra" , "cancer");
			$var5 = true;
			$var6 = -123;
			$var7 = "456";
			$var8 = "3 porquinhos";
		?>
		<p><?php echo gettype($var1);?></p>
		<p><?php echo gettype($var2);?></p>
		<p><?php echo gettype($var3);?></p>
		<p><?php echo gettype($var4);?></p>
		<p><?php echo gettype($var5);?></p>
		<p><?php echo gettype($var6);?></p>
		<p><?php echo gettype($var8);?></p>
		<hr/>
		<strong>Transformando em Booleano!</strong><br/>
		<?php 
			echo (bool)$var1."<br/>";
			echo (bool)$var2."<br/>";
			echo (bool)$var3."<br/>";
			echo (bool)$var4."<br/>";
			echo (bool)$var5."<br/>";
			echo (bool)$var6."<br/>";
			echo (bool)$var7."<br/>";
			echo (bool)$var8."<br/>";
		 ?>
		<hr/>
		<strong>Transformando em integer!</strong><br/>
		<?php 
			echo (int)$var1."<br/>";
			echo (int)$var2."<br/>";
			echo (int)$var3."<br/>";
			echo (int)$var4."<br/>";
			echo (integer)$var5."<br/>";
			echo (integer)$var6."<br/>";
			echo (integer)$var7."<br/>";
			echo (integer)$var8."<br/>";
		 ?>
		 <hr/>
		<strong>Transformando em float!</strong><br/>
		 <?php 
			echo (float)$var1."<br/>";
			echo (float)$var2."<br/>";
			echo (float)$var3."<br/>";
			echo (float)$var4."<br/>";
			echo (real)$var5."<br/>";
			echo (real)$var6."<br/>";
			echo (real)$var7."<br/>";
			echo (real)$var8."<br/>";
		 ?>
		 <hr/>
		<strong>Transformando em string!</strong><br/>
		 <?php 
			echo (string)$var1."<br/>";
			echo (string)$var2."<br/>";
			echo (string)$var3."<br/>";
			echo (string)$var4."<br/>";
			echo (string)$var5."<br/>";
			echo (string)$var6."<br/>";
			echo (string)$var7."<br/>";
			echo (string)$var8."<br/>";
		 ?>
		 <hr/>
		<strong>Transformando em array!</strong><br/>
		 <?php 
			echo (array)$var1."<br/>";
			echo (array)$var2."<br/>";
			echo (array)$var3."<br/>";
			echo (array)$var4."<br/>";
			echo (array)$var5."<br/>";
			echo (array)$var6."<br/>";
			echo (array)$var7."<br/>";
			echo (array)$var8."<br/>";
		 ?>
		 <hr/>
		<strong>Transformando string em integer!</strong><br/>
		<?php 
			$vari = (int)$var1;
			echo $vari;echo "<br/>";
			echo gettype($vari);
		 ?>
		 <hr/>
		<strong>Transformando integer em string!</strong><br/>
		<?php 
			$vars = (string)$var2;
			echo $vars;echo "<br/>";
			echo gettype($vars);
		 ?>
		 <hr/>
		<strong>Transformando string em array!</strong><br/>
		<?php 
			$vara = explode(" " , $var8);
			var_dump($vara); echo "<br/>";
			echo gettype ($vara);
		 ?>
		 <hr/>
		<strong>Transformando array em string !</strong><br/>
		<?php 
			$varst = implode(" | " , $var4);
			echo $varst;echo "<br/>";
			echo gettype ($varst);
		 ?>
		 <hr/>
		<strong>Transformando integer em float!</strong><br/>
		<?php 
			$varstr = (string)$var4;
			echo $varstr;echo "<br/>";
			echo gettype ($varstr);
		 ?>
		 <hr/>
		<strong>Transformando float em string!</strong><br/>
		<?php 
			$varstrg = substr_replace($var3, "R$ 25.32", 0 , strlen($var3));
			echo $varstrg;echo "<br/>";
			echo gettype ($varstrg);
		 ?>

	</body>
</html>