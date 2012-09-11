<!doctype html>
    <head>
        <meta charset="utf-8" />
        <title>Ativ4</title>
    </head>
	<body>
		<div class="container">
            <header>
            </header>
            <article>
           		4. Crie funções para o exercício 2a e uma função calcula(), para chamar cada operação (utilize o switch);<br/>
                 <h1>Operaçoes Aritmeticas</h1>
                 <?php					
					function calcula($n1,$n2,$op){
						switch($op){
							case "soma": return $n1 + $n2; break;
							case "sub": return $n1 - $n2; break;
							case "mult": return $n1 * $n2; break;
							case "div": return $n1 / $n2; break;
							case "mod": return $n1 % $n2; break;}
						
					}
					
					$n1 = 10;
					$n2 = 5;
					$op = "soma";
					echo "<p>".$n1."+".$n2." = ".calcula($n1,$n2,$op)."</p>";
					$op = "sub";
					echo "<p>".$n1."-".$n2." = ".calcula($n1,$n2,$op)."</p>";
					$op = "mult";
					echo "<p>".$n1."*".$n2." = ".calcula($n1,$n2,$op)."</p>";
					$op = "div";
					echo "<p>".$n1."/".$n2." = ".calcula($n1,$n2,$op)."</p>";
					$op = "mod";
					echo "<p>".$n1."%".$n2." = ".calcula($n1,$n2,$op)."</p>";
					
			

				 ?>
             </article> 
             <footer>
             </footer>
        </div>
	</body>
</html>
