<form action="index.php?go=atv1" method="post">
	Valor: <input type="text" name="num1" />
    <select name="operacao">
    	<option value="+" >Soma</option>
        <option value="-" >Subtração</option>
        <option value="/" >Divisão</option>
        <option value="*">Multiplicação</option>
        <option value="mod">Modulo</option>
    </select>
    Valor: <input type="text" name="num2" />
    <input type="submit"  value="calcular"/>
</form>

<?php 
	if(isset($_POST)){
		if($_POST["operacao"]=="+"){
			$soma=(int)$_POST["num1"]+(int)$_POST["num2"];
			echo "Resultado da Soma: ".$soma ;
		}else{
			if($_POST["operacao"]=="-"){
				$soma=(int)$_POST["num1"]-(int)$_POST["num2"];
				echo "Resultado da Subtração: ".$soma ;
			}else{
				if($_POST["operacao"]=="*"){
				$soma=(int)$_POST["num1"]*(int)$_POST["num2"];
				echo "Resultado da Multiplicação: ".$soma ;
			}else{
				if($_POST["operacao"]=="/" && $_POST["num1"]!=0 && $_POST["num2"]!=0){
					$soma=(float)$_POST["num1"]/(float)$_POST["num2"];
					echo "Resultado da Divisão: ".$soma ;
				}else{
					if(  ($_POST["operacao"]=="/" && $_POST["num1"]=='0') || ($_POST["num2"]=='0' && $_POST["operacao"]=="/" ) ){
						echo "Divisão por 0";
					}
						if($_POST["operacao"]=='mod'){
							$mod=$_POST["num1"] % $_POST["num2"];
							echo "Modulo: ".$mod;
							
					}
				}
			}
		}
	}
}
?>