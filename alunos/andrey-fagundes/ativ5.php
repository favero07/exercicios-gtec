<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ativ5</title>
    </head>
    <body>
    	5. a) uma lista de empresas de software;
    	<?php					
				$empresas = array("Aplee","Sonya","Panascanic","Samsong","Nokla","Rockstar");
				//$empresas = array(0 => "Aplee",1 => "Sonya",2 => "Panascanic",3 => "Samsong",4 => "Nokla",5 => "Rockstar");
				$empresas[]= "Maincrosoft";
                $empresas[]= "Del";
                $empresas[]= "Accer";
                $empresas[]= "Joinha";
				
		?>
		<br/>
        5.b) uma lista de compras pro churrasco (que os alunos irão pagar nesse final de semana, claro);
        <?php
			$lista = array("5 kg costela","10 paes","5 lt Refrigerante","5 cx. de cerveja");
        ?>
        <br/>
        5.c) um array informando a configuração de um computador. Exemplo:<br/>
                 $computador["processador"] = "Pentium 500";<br/>
                 $computador["memoria"] = 256;<br/>
                 $computador["placa-de-video"] = false;<br/>
            <?php
				$computador1 = array();
				$computador1["processador"] = "Pentium 500";
                $computador1["memoria"] = 256;
                $computador1["placa-de-video"] = false;
				$computador1["hd"] = 500;
                $computador1["fonte"] = 300;
                $computador1["placa-wireless"] = false;
				
				
				$computador2 = array(
				                      "processador" => "Pentium 4",
                					  "memoria" => 4,
                                      "placa-de-video" => true,
				                      "hd" => 1500,
                                      "fonte" => 450,
                                      "placa-wireless" => true
									);
									
									
				$laboratorio = array($computador1,$computador2);
				
				for($j = 0; $j < count($laboratorio); $j++){
					foreach($laboratorio[$j] as $caracteristica => $valor){
						echo $caracteristica.": ".$valor;
					}
				}
				
            ?>
            
            <br/>
            5.d) mostre os valores de cada Array utilizando tanto FOR, FOREACH, WHILE (consulte o php.net)
           
           	<p>Mostrando os itens: (Usando FOREACH)</p>
            <ul>
               <?php 
                    foreach ($empresas as $index => $value){ 
                ?>
                    <li>
                <?php 
                    echo "Indice: ".$index. " Valor: ".$value;
                ?>
                    </li>
                <?php 
                    }
                ?>
           </ul>
           <br/>
           5. e) mostre os valores de cada Array utilizando tanto FOR, FOREACH, WHILE (consulte o
 php.net) 
           <p>Mostrando os itens: (USANDO PRINT_R)</p>
            <pre>
                <?php 
                    print_r($empresas); //debuga a variavel
                ?>
            </pre>

            <p>Mostrando os itens: (USANDO VAR_DUMP)</p>
            <pre>
                <?php 
                    var_dump($empresas); //debuga a variavel
                 ?>
            </pre>
    </body>
</html>