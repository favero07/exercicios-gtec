<?php
	class Urso extends Mamifero{
		private $corPelo;
		private $peso;
				
		public function hibernar(){
			echo ("Esta hibernando!");
		}
		public function getCorPelo(){
			return $this->corPelo;
		}
		public function setCorPelo($novoCorPelo){
			$this->corPelo = $novoCorPelo;
		}
		public function getPeso(){
			return $this->peso;
		}
		public function setPeso($novoPeso){
			$this->peso = $novoPeso;
		}
		
	}
?>