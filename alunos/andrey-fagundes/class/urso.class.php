<?php
	class Urso extends Mamifero{
		private $corPele;
		private $peso;
		
		//serviçoes/operaçoes
		public function hibernar(){
				echo "hibernando";
		}
		
		//encapsulamento
		public function getPeso(){
			return $this->peso;	
		}
		
		public function getCorPele(){
			return $this->corPele;	
		}
		
		public function setPeso($novoPeso){
			$this->peso = $novoPeso;	
		}
		
		public function setCorPele($novaCorPele){
			$this->corPele = $novaCorPele;	
		}
		
	}
?>