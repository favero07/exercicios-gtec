<?php
	function soma(){
		if($_POST["operacao"]=="+"){
			$soma=(int)$_POST["num1"]+(int)$_POST["num2"];
			echo "Resultado da Soma: ".$soma ;
		}
	}
	
	function subtrai(){
		if($_POST["operacao"]=="-"){
				$soma=(int)$_POST["num1"]-(int)$_POST["num2"];
				echo "Resultado da Subtração: ".$soma ;
			}
	}
	
	function divide(){
		if($_POST["operacao"]=="/" && $_POST["num1"]!=0 && $_POST["num2"]!=0){
				$soma=(float)$_POST["num1"]/(float)$_POST["num2"];
				echo "Resultado da Divisão: ".$soma ;
			}else{
				if(  ($_POST["operacao"]=="/" && $_POST["num1"]=='0') || ($_POST["num2"]=='0' && $_POST["operacao"]=="/" ) ){
					echo "Divisão por 0";
					}
			}
	}
	
	function multiplica(){
		if($_POST["operacao"]=="*"){
				$soma=(int)$_POST["num1"]*(int)$_POST["num2"];
				echo "Resultado da Multiplicação: ".$soma ;
		}
	}
	
	function mod(){
		if($_POST["operacao"]=='mod'){
			$mod=$_POST["num1"] % $_POST["num2"];
			echo "Modulo: ".$mod;		
		}
	}
?>