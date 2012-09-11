<?php 
	require_once "mamifero.class.php";
	class Urso extends Mamifero{

		private $corPelo;
		private $peso;

		public function hiberna(){
			echo "O Urso hiberna no invero!";
		}

		//encapsulamento

		public function getCorPelo(){
			return $this->corPelo;
		}

		public function getPeso(){
			return $this->peso;
		}

		//funcoes de entrada de valor

		public function setCorPelo($novaCor){
			return $this->corPelo = $novaCor;
		}

		public function setPeso($novoPeso){
			return $this->alimentacao = $novoPeso;
		}
	}
 ?>