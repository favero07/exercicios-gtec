<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ativ6</title>
    </head>
    <body>
		6. Utilize a função gettype() para saber quais são os tipos das variáveis.<br/><br/>
        6.a) Converta uma STRING em INTEGER<br/>
        <?php
			$valor = "UHASUHUASUAS";
			echo "valor inicial: ".$valor."<br/>";
			echo "tipo do valor inicial: ".gettype($valor)."<br/>";
			$var = (int) $valor;
			echo "valor depois: ".$var."<br/>";
			echo "tipo do valor inicial: ".gettype($var)."<br/>";
		?>
        <br/><br/>
        6.b) Converta uma INTEGER em STRING<br/>
        <?php
			$valor = 123;
			echo "valor inicial: ".$valor."<br/>";
			echo "tipo do valor inicial: ".gettype($valor)."<br/>";
			$var = (string) $valor;
			echo "valor depois: ".$var."<br/>";
			echo "tipo do valor inicial: ".gettype($var)."<br/>";
		?>
        <br/><br/>
        6.c) Converta uma STRING em ARRAY<br/>
        <?php
			$string = "joão, maria, josé, pedro";
			$array  = explode(',', $string);
			print_r($string);
			echo "tipo do valor inicial: ".gettype($string)."<br/><pre>";
			print_r($array);
			echo "</pre>tipo do valor depois: ".gettype($array)."<br/>";
			
		?>
        <br/><br/>
        6.d) Converta um ARRAY em STRING<br/>
        <?php
			$array = array("Aplee","Sonya","Panascanic","Samsong","Nokla","Rockstar");
			$string  = implode(',', $array);
			print_r($array);
			echo "tipo do valor inicial: ".gettype($array)."<br/><pre>";
			print_r($string);
			echo "</pre>tipo do valor depois: ".gettype($string)."<br/>";
		?>
        <br/><br/>
        6.e) Converta um INTEGER em FLOAT<br/>
        <?php
			$valor = 123123;
			echo "valor inicial: ".$valor."<br/>";
			echo "tipo do valor inicial: ".gettype($valor)."<br/>";
			$var = (float) $valor;
			echo "valor inicial: ".$var."<br/>";
			echo "tipo do valor depois: ".gettype($var)."<br/>";
		?>
        <br/><br/>
        6.f) Converta um FLOAT em STRING, mostrando o resultado: R$ 23,45<br/>
        <?php
			$valor = 23.45;
			echo "valor inicial: ".$valor."<br/>";
			echo "tipo do valor inicial: ".gettype($valor)."<br/>";
			$string = substr_replace("R$: ",$valor,4);
			echo "valor inicial: ".$string."<br/>";
			echo "tipo do valor inicial: ".gettype($string)."<br/>";
		?>
    </body>
</html>