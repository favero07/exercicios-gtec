<!doctype html>
    <head>
        <meta charset="utf-8" />
        <title>Ativ3</title>
    </head>
	<body>
		<div class="container">
            <header>
            </header>
            <article>
           		3. Utilizando operadores de condição (if, switch):
                 a) Ler 3 nomes de pessoas de uma equipe e o seu sexo ($nome1 = "Maria"; $sexo1 = "F"...)<br/>
                 b) Através da condição IF e os operadores &&, mostrar se o sexo predominante da equipe é Feminino ou Masculino e mostrar no HTML;<br/>
                 c) Através da condição Switch, escreva uma pergunta e leia a resposta ($resposta), sendo as combinações possíveis sejam: S, N, e mostre no HTML a resposta (Sim ou Não), caso o valor não seja S, ou N, mostrar na tela: "Resposta inválida";<br/>
                 d) Digite o número do mês e responda qual mês é. Ex: Janeiro, Fevereiro... (utilize o switch)<br/>
                                 <h1>Operaçoes Aritmeticas</h1>
                 <?php
				 	$f = 0;
					$m = 0;
				 	function ecop( $texto){
				 		echo "<p>".$texto."<p/>";
					}
				 
				 	echo "<br/>A e B) <br/>";
				
					
					$equipe = array("maria","f",
										"jose","m",
										"marta","f"
										);
					
					for ($i = 1; $i < count($equipe); $i = $i + 2){
							if ($equipe[$i] == "f" || $equipe[$i] == "F"){	
								$f++;
							}else{
								$m++;
							}
					}
					
					
					
					echo $m;
					echo $f;
					
					if($f>$m){
						ecop("tem mais mulheres");
					}else if ($m>$f){
						ecop ("tem mais homens");
					}else{
						ecop ("tudo igual");
					}
				 ?>
             </article> 
             <footer>
             </footer>
        </div>
	</body>
</html>
