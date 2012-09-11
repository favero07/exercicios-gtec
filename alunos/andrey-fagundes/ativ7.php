<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ativ7</title>
    </head>
    <body>
    Descrever e fazer exemplos das seguintes funções do PHP:<br/>
     a) trim()= Retira espaço no ínicio e final de uma string. <br/> Exemplo: <br/>
     <?php 
	 	$string = "    usahaus  ";
		echo "antes: <br/>"; 
	 	echo $string;
		echo "depois: <br/>";
		echo trim($string);
		echo "<hr/>";
	 ?> 
     b) substr() = Retorna uma parte de uma string<br/>
     <?php
		$rest = "abcdef";
		echo substr($rest, -1)."<br/>";     // retorna "f"
		echo substr($rest, -2)."<br/>";    // retorna "ef"
		echo substr($rest, -3, 1)."<br/>"; // retorna "d"
		echo substr($rest, 0, -1)."<br/>";  // retorna "abcde"
		echo substr($rest, 2, -1)."<br/>";  // retorna "cde"
		echo substr($rest, 4, -4)."<br/>";  // retorna ""
		echo substr($rest, -3, -1)."<br/>"; // retorna "de"
		echo "<hr/>";
	?>
     c) strtolower() = Converte uma string para minúsculas.<br/>
     <?php
		$str = "Mary Had A Little Lamb and She LOVED It So";
		echo "antes: ".$str."<br/>";
		echo "depois: ".strtolower($str)."<br/><hr/>";
	 ?>
     d) strtoupper() = Converte uma string para maiúsculas<br/>
     <?php
		$str = "Mary Had A Little Lamb and She LOVED It So";
		echo "antes: ".$str."<br/>";
		echo "depois: ".strtoupper($str)."<br/><hr/>";
	 ?>
     e) ucfirst() = Converte para maiúscula o primeiro caractere de uma string.<br/>
     <?php
		$foo = 'hello world!';
		echo "antes: ".$foo."<br/>";  
		echo "depois: ".ucfirst($foo)."<br/>";             // Hello world!
		
		$bar = 'HELLO WORLD!';
		echo "antes: ".$bar."<br/>";  
		echo "depois (errado): ".ucfirst($bar)."<br/>";  // HELLO WORLD!         
		echo "depois (ccerto): ".ucfirst(strtolower($bar))."<br/><hr/>"; // Hello world!
	?>
     f) ucwords() = Converte para maiúsculas o primeiro caractere de cada palavra.<br/>
     <?php
		$foo = 'hello world!';
		echo "antes: ".$foo."<br/>";  
		echo "depois: ".ucwords($foo)."<br/>";             // Hello world!
		
		$bar = 'HELLO WORLD!';
		echo "antes: ".$bar."<br/>";  
		echo "depois (errado): ".ucwords($bar)."<br/>";  // HELLO WORLD!         
		echo "depois (ccerto): ".ucwords(strtolower($bar))."<br/><hr/>"; // Hello world!
	?>
     g) join() = Sinônimo de implode().<br/><hr/>
     h) isset() = Informa se a variável foi iniciada.<br/><hr/>
     i) strlen() = Retorna o tamanho de uma string<br/>
     <?php
		$str = 'abcdef';
		echo $str;
		echo strlen($str); // 6
		
		$str = ' ab cd ';
		echo $str;
		echo strlen($str); // 7
	?>
     j) is_float() = Informa se a variável é do tipo float,<br/> 
     <?php
		if(is_float(27.25)) {
		 echo "is float\n";
		}else {
		 echo "is not float\n";
		}
	?>
    <pre>
    <?php
		var_dump(is_string('abc'));
		var_dump(is_string("23"));
		var_dump(is_string(23.5));
		var_dump(is_string(true));
	?>
    </pre>
     is_int()) = Informa se a variável é do tipo inteiro,<br/> 
     <?php
		if (is_int(23)) {
		 echo "is integer\n";
		} else {
		 echo "is not an integer\n";
		}
	?>
    <pre>
    <?php
		var_dump(is_string('abc'));
		var_dump(is_string("23"));
		var_dump(is_string(23.5));
		var_dump(is_string(true));
	?>
    </pre>
     is_array()) = Informa se a variável é do tipo array,<br/> 
     <?php
		$yes = array('this', 'is', 'an array');
		
		echo is_array($yes) ? 'Array' : 'not an Array';
		echo "\n";
		
		$no = 'this is a string';
		
		echo is_array($no) ? 'Array' : 'not an Array';
		echo "<br/>";
	?>
     is_string()) = Informa se a variável é do tipo string,<br/> 
     <?php
		if (is_string("23")) {
		 echo "is string\n";
		} else {
		 echo "is not an string\n";
		}
	?>
    <pre>
    <?php
		var_dump(is_string('abc'));
		var_dump(is_string("23"));
		var_dump(is_string(23.5));
		var_dump(is_string(true));
	?>
    </pre>
     is_bool()) = Informa se a variável é do tipo booleano,<br/> 
     <?php
		$a = false;
		$b = 0;
		
		// Verifica se $a é boolean, retorna true
		if (is_bool($a)) {
			echo 'A variável $a é um valor booleano';
		}
		
		// Verifica se $b é boolean, retorna false
		if (is_bool($b)) {
			echo 'A variável $b é um valor booleano';
		}
		echo "<br/>";
	?>
     is_numeric()) = Informa se a variável é um número ou uma string numérica.<br/> 
     <?php
     	echo "<br/><hr/>";
     ?>
     k) getdate() =  Consegue informações data/hora.<br/>
     <?php
		$today = getdate(); 
	?>
    <pre>
    <?php
		echo print_r($today);
	?>
    </pre>
    <hr/>
     l) empty() =  Informa se a variável é vazia.<br/><hr/>
     m) strip_tags() = Retira as tags HTML e PHP de uma string<br/>
     n) max() = Localiza o maior valor.<br/>
     <?php
		echo max(1, 3, 5, 6, 7). "\n";  // 7
		echo max(array(2, 4, 5)). "\n"; // 5
		
		echo max(0, 'hello'). "\n";     // 0
		echo max('hello', 0). "\n";     // hello
		echo max(-1, 'hello'). "\n";    // hello
		
		// Com arrays múltiplos, max compara da esquerda para direita,
		// assim nesse exemplo: 2 == 2, mas 4 < 5
		$val = max(array(2, 4, 8), array(2, 5, 7)); // array(2, 5, 7)
		
		// Se forem informados um array e um não array, o array
		// é sempre retornado como se ele fosse o maior
		$val = max('string', array(2, 5, 7), 42);   // array(2, 5, 7)
		 echo "<br/><hr/>";
	?>
     	min() = Localiza o menor valor.<br/>
        <?php
			echo min(2, 3, 1, 6, 7). "\n";  // 1
			echo min(array(2, 4, 5)). "\n"; // 2
			
			echo min(0, 'hello'). "\n";     // 0
			echo min('hello', 0). "\n";     // hello
			echo min('hello', -1). "\n";    // -1
			
			// Com arrays múltiplos, min compara da esquerda para direita,
			// assim nesse exemplo: 2 == 2, mas 4 < 5
			$val = min(array(2, 4, 8), array(2, 5, 1)); // array(2, 4, 8)
			
			// Se ambos forem um array e um não array, o array
			// nunca será retornado porque ele é sempre considerado o maior
			$val = min('string', array(2, 5, 7), 42);   // string
			echo "<br/><hr/>";
		?>
     o) abs() = Valor absoluto<br/>
     <?php
		$abs = abs(-4.2). "\n"; // $abs = 4.2; (double/float)
		$abs2 = abs(5). "\n";   // $abs2 = 5; (inteiro)
		$abs3 = abs(-5). "\n";  // $abs3 = 5; (inteiro)
		echo "<br/><hr/>";
	?>
     p) ceil() = Arredonda frações para cima.<br/>
        <?php
			echo ceil(4.3). "\n";   // 5
			echo ceil(9.999). "\n"; // 10
			echo ceil(-3.14). "\n"; // -3
			echo "<br/><hr/>";
		?>
     	floor() = Arredonda frações para baixo.<br/>
        <?php
			echo floor(4.3). "\n";   // 4
			echo floor(9.999. "\n"); // 9
			echo floor(-3.14). "\n"; // -4
			echo "<br/><hr/>";
		?>
		round() = Arredonda um número.<br/>
        <?php
			echo round(3.4). "\n";         // 3
			echo round(3.5). "\n";         // 4
			echo round(3.6). "\n";         // 4
			echo round(3.6, 0). "\n";      // 4
			echo round(1.95583, 2). "\n";  // 1.96
			echo round(1241757, -3). "\n"; // 1242000
			echo round(5.045, 2). "\n";    // 5.05
			echo round(5.055, 2). "\n";    // 5.06
			echo "<br/><hr/>";
		?>
     q) rand() = Gera um inteiro aleatório.<br/>
     <?php
		echo rand() . "\n";
		echo rand() . "\n";
		echo rand(5, 15);
		echo "<br/><hr/>";
	?>
     r) sqrt() = Raiz quadrada.<br/>
     <?php
		// Precisão depende de sua diretiva precision
		echo sqrt(9). "\n"; // 3
		echo sqrt(10). "\n"; // 3.16227766 ...
		echo "<br/><hr/>";
	?>
     s) str_replace() = Substitui todas as ocorrências da string de procura com a string de substituição.<br/>
     <?php
		// Fornece: <body text='black'>
		$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
		
		// Fornece: Hll Wrld f PHP
		$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
		$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
		
		// Fornece: você comeria pizza, cerveja e sorvete todos os dias
		$frase  = "você comeria frutas, vegetais, e fibra todos os dias.";
		$saudavel = array("frutas", "vegetais", "fibra");
		$saboroso   = array("pizza", "cerveja", "sorvete");
		
		$novafrase = str_replace($saudavel, $saboroso, $frase);
		
		// Uso do parâmetro count está disponível no PHP 5.0.0
		$str = str_replace("ll", "", "good golly miss molly!", $count);
		echo $count."<br/>"; // 2
		
		// Order of replacement
		$str     = "Line 1\nLine 2\rLine 3\r\nLine 4\n";
		$order   = array("\r\n", "\n", "\r");
		$replace = '<br />';
		// Processes \r\n's first so they aren't converted twice.
		$newstr = str_replace($order, $replace, $str);
		
		// Outputs: apearpearle pear
		$letters = array('a', 'p');
		$fruit   = array('apple', 'pear');
		$text    = 'a p';
		$output  = str_replace($letters, $fruit, $text);
		echo $output."<br/>";
		echo "<br/><hr/>";
	?>
     t) count() = Conta o número de elementos de uma variável, ou propriedades de um objeto.<br/>
     <?php
		$a[0] = 1;
		$a[1] = 3;
		$a[2] = 5;
		$result = count($a);
		// $result == 3
		
		$b[0] = 7;
		$b[5] = 9;
		$b[10] = 11;
		$result = count($b);
		// $result == 3
		
		$result = count(null);
		// $result == 0
		
		$result = count(false);
		// $result == 1
		echo "<br/><hr/>";
	?>
     u) htmlspecialchars() = Converte caracteres especiais para a realidade HTML.<br/>
     </body>
</html>