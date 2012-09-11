
	<header>
		<h1>Algumas Fun&ccedil&ocedilaes do PHP</h1>
	</header>

	<aside>
		<p>Trim </p>
		
		<!--trim: retira os caracteres escolhidos ou se nao tiver escolha retira os espaços no começo e fim-->
		<?php 
			$var = "..maicon..";
			$var1 = trim($var, ".");
			echo $var."<br/>";
			echo $var1;
		 ?>

		 <p> Substr</p>
		
		<!--substr: retornos caracteres desde o start ate o length-->
		<?php 
			$var = "maicon";
			$var1 = substr($var, 0 /*start*/,2 /*length*/);
			echo $var."<br/>";
			echo $var1;
		 ?>

		 <p> Strtolower </p>
		
		 
		<!--strtolower: coloca todas as letras para minuscula-->
		<?php 
			$var = "MAICON";
			$var1 = strtolower($var);
			echo $var."<br/>";
			echo $var1;
		 ?>

		 <p>Strtoupper </p>
		  
		<!--: coloca todas as letras para maiuscula-->
		<?php 
			$var = "maicon";
			$var1 = strtoupper($var);
			echo $var."<br/>";
			echo $var1;
		 ?>


		 <p> Ucfirst </p>
		
		 
		<!-- ucfirst: coloca a primeira letra da string em maiuscula-->
		<?php 
			$var = "maicon";
			$var1 = ucfirst($var);
			echo $var."<br/>";
			echo $var1;
		 ?>

		 <p> Ucwords </p>

		
		 <!-- ucwords: coloca todas as primeiras letras das palavras da string em maiuscula-->
		 <?php 
		 	$var = "maicon ghidolin";
			$var1 = ucwords($var);
			echo $var."<br/>";
			echo $var1;

		  ?>

		  <p>Join </p>
		 	
		 
		  <!-- join: sinonimo de implode-->
		  <?php 
		  	$array = array("Maicon", "Ghidolin");
		  	$var = join(" " , $array);
		  	echo $var;

		   ?>

		  
		  

		  <p> Getdate</p>
		  
		  <!--getdate: retorna informaçoes data e hora-->
		  <?php 
		  	$var = getdate();
		  ?>
		   <pre><?php print_r($var);?></pre>


		  <p>empty</p>
		  
		  <!--empty: informa se a variavel é vazia, retorna FALSE se ela nao for vazia e TRUE se ror vazi4a--> 
		  <?php 
		  		$var = 1;
		  		$var2 = "";
		  		if(empty($var)){
		  			echo $var."<br/>";
		  		}
		  		if(empty($var2)){
		  			echo empty($var2);
		  		}
		   ?>

		   

		   
		    <p>Max</p>
		    
		    <!--max: retorna o maior valor no array-->
		    <?php 
		    $var = array(1,2,3);
		    echo max($var);
		     ?>

		    
		    <p>Min</p>
		    
		    <!--min: retorna o menor valor no array-->
		    <?php 
		    	$var = array(1,2,3);
		    	echo min($var);
		     ?>

		    
		    <p>Abs</p>
		    
		    <!--abs: retorna o valor absoluto do numero-->
		    <?php  
		    	$var = -2;
		    	$var1 = 4;
		    	echo abs($var)."<br/>";
		    	echo abs($var1);
		    ?>

		    

		    <p>Ceil </p>
		   
		    <!--ceil — Arredonda frações para cima-->
		    <?php 
		    	$var = 4.3;
		    	echo ceil($var);
		     ?>



		    <p>Floor</p>

			<!--floor — Arredonda frações para baixo-->
			<?php 
		    	$var = 4.3;
		    	echo floor($var);
		     ?>

			
			<p>Round  </p>

			<!--round — Arredonda um número-->
			<?php 
		    	$var = 4.5;
		    	echo round($var);
		     ?>



			<p>Rand</p>
		    
			<!--rand — Gera um inteiro aleatório-->
			<?php 
		    	$var = rand(1,10);
		    	echo $var;
		     ?>

			
			<p>Sqrt</p>
		
			<!--sqrt — retorna a Raiz quadrada-->
			<?php 
		    	$var = 25;
		    	echo sqrt($var);
		     ?>

			
		    <p>Str_replace</p>
		    
			<!--str_replace — Substitui todas as ocorrências da string de procura com a string de substituição-->
			<?php 
		    	$var = "Maicon Ghidolin";
		    	echo str_replace($var,2,10);
		     ?>

			
		    <p>Count</p>
		   
			<!--count — Conta o número de elementos de uma variável, ou propriedades de um objeto-->
			<?php 
		    	$var = array(1,2,3,4,5,6);
		    	echo count($var);
		     ?>

	</aside>

