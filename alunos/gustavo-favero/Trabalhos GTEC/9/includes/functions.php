<?php
	function eco($texto){
		echo "<p>" . $texto . "</p>";	
	}
	function somar($n1, $n2){
		return ($n1+$n2);
	}
	function subtrair($n1, $n2){
		return ($n1-$n2);
	}
	function multiplicar($n1, $n2){
		return ($n1*$n2);
	}
	function dividir($n1, $n2){
		return($n1/$n2);
	}
	function modulo($n1, $n2){
		return($n1%$n2);
	}
	function calcular($n1, $n2, $op){
		$op = strtolower($op);
		switch($op){
			case 'somar':
				return somar($n1,$n2);
				break;
			case 'subtrair':
				return subtrair($n1,$n2);
				break;
			case 'multiplicar':
				return multiplicar($n1,$n2);
				break;
			case 'dividir':
				return dividir($n1,$n2);
				break;
			case 'modulo':
				return modulo($n1,$n2);
				break;
			default:
				return "Opcão incorreta";
				break;		
		}
	}
?>