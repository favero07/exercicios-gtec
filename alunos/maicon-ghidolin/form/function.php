<?php 

	//valida email
	function validaemail($email){

		if(preg_match("/^([0-9a-zA-Z]+([_.-]?[0-9a-zA-Z]+)*@[0-9a-zA-Z]+[0-9,a-z,A-Z,.,-]*(.){1}[a-zA-Z]{2,4})+$/", $email)){
			return true;
		}
		return false;
		
	}

	//valida ano
	function validaano($ano){

		if(preg_match("/^\d{4}$/",$ano)){
			return true;
		}
		return false;

	}

	//imprime
	function eco($var){ 
		if (is_array($var)) {
			echo "<ul>";
				foreach($var as $valor){
					echo "<li><p>".$valor."</p></li>";

				}
			echo "</ul>";
		}
		else{
		 echo "<p>". $var . " </p>";
		}
	 }
?>
