<?php 
	function soma($num1 ,$num2){
		$resultado = $num1 + $num2; 
		return $resultado;
	}
	
	function sub($num1 ,$num2){
		$resultado = $num1 - $num2;
		return $resultado;
	}

	function div($num1 ,$num2){
		$resultado = $num1 / $num2;
		return $resultado;
	}

	function mult($num1 ,$num2){
		$resultado = $num1 * $num2;
		return $resultado;
	}

	function mod($num1 ,$num2){
		$resultado = $num1 % $num2;
		return $resultado;
	}

	function eco($texto){
		echo $texto."<br/>";
	}

	function calcula($num1 ,$num2 ,$oper){
		switch ($oper) {
			case 'soma':
				return soma(30,10);
			break;

			case 'subtracao':
				return sub(30,10);
			break;

			case 'divisao':
				return div(30,10);
			break;
			
			default:
				echo "Operacao inpossivel!"
			break;
		}

	}
?>