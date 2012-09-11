<!doctype html>
    <head>
        <meta charset="utf-8" />
        <title>Ativ2</title>
    </head>
	<body>
		<div class="container">
            <header>
            </header>
            <article>
            2. Utilizando operadores Aritméticos:<br/>
           		a) Fazer uma calculadora utilizando a adição, subtração, divisão, multiplicação e módulo;<br/>
                 b) Mostrar os resultados no HTML;<br/>
                 c) Criar um algoritmo que responde se o número digitado é par ou ímpar;<br/>
                 d) Ler 4 notas ($n1, $n2, $n3, $n4) referentes a notas de um aluno, calcular a média e com base na média 7, responder se o aluno está aprovado ou não. Testar com diferentes valores;<br/>
                 e) pesquisar sobre as funções PHP para: cosseno, seno, tangente, logaritmo, raiz quadrada, potência.<br/>
                 <h1>Operaçoes Aritmeticas</h1>
                 <?php
				 	function eco( $texto,$result){
				 		echo "<p>".$texto.": ".$result."<p/>";
					}
				 	$n1 = 10;
					$n2 = 20;
					$cont = 5;

					$result= array($n1+$n2,$n1-$n2,$n1*$n2,$n1/$n2,$n1%$n2);
					$text = array("soma","subtração","multiplicação","divisão","mod");
					echo "<br/>A e B) <br/>";
					for ($i = 0; $i < $cont; $i++) {
						eco($text[$i],$result[$i]);
					}
					
					echo "<br/>C) <br/>";
					for ($i = 0; $i < $cont; $i++) {
						if($result[$i]%2 == 0){
							echo "<p> ".$text[$i]." é par <p/>";	
						}else{
							echo  "<p>" .$text[$i]." é impar <p/>";	
						}
					}
					
					echo "<br/>D) <br/>";
					$notas = array(5,6.5,7,9);
					$cont = 4;
					$vl = 0;
					
					for ($i = 0; $i < $cont; $i++) {
						$vl = $vl + $notas[$i];
					}
					
					if (($vl / $cont) >= 7){
						echo "<p>Aprovado<p/>";
					}else{
						echo "<p>Reprovado</p>";	
					}
					
				 ?>
                 <br/>E) Funções Matemáticas<br/>
              		<ul> 
                        <li>abs($valor) — Valor absoluto</li>
                        <li>acos($valor) — Cosseno Inverso (arco cosseno)</li>
                        <li>acosh($valor) — Cosseno Hiperbólico Inverso</li>
                        <li>asin($valor) — Seno Inverso (arco seno)</li>
                        <li>asinh($valor) — Seno Hiperbólico Inverso</li>
                        <li>atan2($valor) — Tangente inversa de duas variáveis</li>
                        <li>atan($valor) — Tangente Inversa (arco tangente)</li>
                        <li>atanh($valor) — Tangente hiperbólica inversa</li>
                        <li>base_convert($valor) — Converte um número entre bases arbitrárias</li>
                        <li>bindec($valor) — Binário para decimal</li>
                        <li>ceil($valor) — Arredonda frações para cima</li>
                        <li>cos($valor) — Coseno</li>
                        <li>cosh($valor) — Cosseno hiperbólico</li>
                        <li>decbin($valor — Decimal para binário</li>
                        <li>dechex($valor — Decimal para hexadecimal</li>
                        <li>decoct($valor — Decimal para octal</li>
                        <li>log($valor,$base) — Logaritmo natural</li>
                        <li>max($valor()) — Localiza o maior valor</li>
                        <li>min($valor()) — Encontra o menor valor</li>
                        <li>mt_rand($valor1,$valor2) — Gerador melhorado de números aleatórios</li>
                        <li>octdec($valor) — Octal para decimal</li>
                        <li>pi($valor) — Obtém o valor de pi</li>
                        <li>pow($base,$expoente) — Potência</li>
                        <li>rad2deg($valor) — Converte o número em radianos para o equivalente em graus</li>
                        <li>rand($valor_1,$valor2) — Gera um inteiro aleatório entre os dois valores</li>
                        <li>round($valor) — Arredonda um número</li>
                        <li>sin($valor) — Seno</li>
                        <li>sinh($valor) — Seno hiperbólico</li>
                        <li>sqrt($valor) — Raiz quadrada</li>
                        <li>srand($valor) — Semeia o gerador de números aletórios</li>
                        <li>tan($valor) — Tangente</li>
                        <li>tanh($valor) — Tangente hiperbólica</li>
                        <li>exp — Calcula o expoente de E</li>
              	<ul/>
             </article> 
             <footer>
             </footer>
        </div>
	</body>
</html>
