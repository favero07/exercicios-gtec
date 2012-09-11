<?php
	class Carro{
		private $placa;
		private $modelo;
		
		//serviçoes/operaçoes
		public function acelerar(){
				echo "acelerando";
		}
		
		public function freiar(){
			echo "freiando";
		}
		
		//encapsulamento
		public function getPlaca(){
			return $this->placa;	
		}
		
		public function getModelo(){
			return $this->modelo;	
		}
		
		public function setPlaca($novaPlaca){
			$this->placa = $novaPlaca;	
		}
		
		public function setModelo($novaModelo){
			$this->modelo = $novaModelo;	
		}
		
	}





?>