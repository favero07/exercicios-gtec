<html>
	<head>
		<title>funcoes</title>
	</head>
	<body>
		trim
		 <br/>
		<!--trim: retira os caracteres escolhidos ou se nao tiver escolha retira os espaços no começo e fim-->
		<?php 
			$var = "..maicon..";
			$var1 = trim($var, ".");
			echo $var."<br/>";
			echo $var1;
		 ?>

		 <br/><br/>
		 substr
		  <br/>
		<!--substr: retornos caracteres desde o start ate o length-->
		<?php 
			$var = "maicon";
			$var1 = substr($var, 0 /*start*/,2 /*length*/);
			echo $var."<br/>";
			echo $var1;
		 ?>

		 <br/><br/>
		 strtolower
		  <br/>
		<!--strtolower: coloca todas as letras para minuscula-->
		<?php 
			$var = "MAICON";
			$var1 = strtolower($var);
			echo $var."<br/>";
			echo $var1;
		 ?>

		 <br/><br/>
		 strtoupper
		  <br/>
		<!--: coloca todas as letras para maiuscula-->
		<?php 
			$var = "maicon";
			$var1 = strtoupper($var);
			echo $var."<br/>";
			echo $var1;
		 ?>


		 <br/><br/>
		 ucfirst
		  <br/>
		<!-- ucfirst: coloca a primeira letra da string em maiuscula-->
		<?php 
			$var = "maicon";
			$var1 = ucfirst($var);
			echo $var."<br/>";
			echo $var1;
		 ?>

		 <br/><br/>
		 ucwords
		  <br/>
		 <!-- ucwords: coloca todas as primeiras letras das palavras da string em maiuscula-->
		 <?php 
		 	$var = "maicon ghidolin";
			$var1 = ucwords($var);
			echo $var."<br/>";
			echo $var1;

		  ?>

		  <br/><br/>
		 	join
		  <br/>
		  <!-- join: sinonimo de implode-->
		  <?php 
		  	$array = array("Maicon", "Ghidolin");
		  	$var = join(" " , $array);
		  	echo $var;

		   ?>

		  
		  <!-- isset: verifica se a variavel foi iniciada, ou seja, se foi adicionada algum valor a ela. 
		    Se ela é NULL esset retorna FALSE senao isser retorna TRUE-->
		
			<!--strlen:retorn o tamanho da string-->

		  <!--is_float(), is_int(), is_array(), is_string(), is_bool(), is_numeric(): 
		  retorna se a variavel é float, int, array, string, booleano ou numerico-->

		  <br/><br/>
		  getdate
		  <br/>
		  <!--getdate: retorna informaçoes data e hora-->
		  <?php 
		  	$var = getdate();
		  ?>
		   <pre><?php print_r($var);?></pre>

		  <br/><br/>
		  empty
		  <br/>
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

		   <br/><br/>
		   strip_tags
		   <br/>
		   <!--strip_tags: retira todas as tags html e php de uma string-->
		   <?php 
		   		$var = "<p>maicon<!--coment--></p><h1>maicon</h1>";
		   		echo strip_tags($var)."<br/>";
		   		echo strip_tags($var, "<p> <h1>");
		    ?>

		    <br/><br/>
		    max
		    <br/>
		    <!--max: retorna o maior valor no array-->
		    <?php 
		    $var = array(1,2,3);
		    echo max($var);
		     ?>

		    <br/><br/>
		    min
		    <br/>
		    <!--min: retorna o menor valor no array-->
		    <?php 
		    	$var = array(1,2,3);
		    	echo min($var);
		     ?>

		     <br/><br/>
		    abs
		    <br/>
		    <!--abs: retorna o valor absoluto do numero-->
		    <?php  
		    	$var = -2;
		    	$var1 = 4;
		    	echo abs($var)."<br/>";
		    	echo abs($var1);
		    ?>

		    <br/><br/>
		    ceil
		    <br/>
		    <!--ceil — Arredonda frações para cima-->
		    <?php 
		    	$var = 4.3;
		    	echo ceil($var);
		     ?>

		    <br/><br/>
		    floor
		    <br/>
			<!--floor — Arredonda frações para baixo-->
			<?php 
		    	$var = 4.3;
		    	echo floor($var);
		     ?>

			<br/><br/>
		    round
		    <br/>
			<!--round — Arredonda um número-->
			<?php 
		    	$var = 4.5;
		    	echo round($var);
		     ?>

			<br/><br/>
		    rand
		    <br/>
			<!--rand — Gera um inteiro aleatório-->
			<?php 
		    	$var = rand(1,10);
		    	echo $var;
		     ?>

			<br/><br/>
		    sqrt
		    <br/>
			<!--sqrt — retorna a Raiz quadrada-->
			<?php 
		    	$var = 25;
		    	echo sqrt($var);
		     ?>

			<br/><br/>
		    str_replace
		    <br/>
			<!--str_replace — Substitui todas as ocorrências da string de procura com a string de substituição-->
			<?php 
		    	$var = "Maicon Ghidolin";
		    	echo str_replace($var,2,10);
		     ?>

			<br/><br/>
		    count
		    <br/>
			<!--count — Conta o número de elementos de uma variável, ou propriedades de um objeto-->
			<?php 
		    	$var = array(1,2,3,4,5,6);
		    	echo count($var);
		     ?>

			<br/><br/>
		    htmlspecialchars
		    <br/>
			<!--htmlspecialchars — Converte caracteres especiais para a realidade HTML -->
			<?php 
		    	$var = htmlspecialchars("cáchãça");
		    	echo ($var);
		     ?>

			
	</body>
</html>


