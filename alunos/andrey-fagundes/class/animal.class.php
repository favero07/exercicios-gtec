<?php
	class Animal{
		private $sexo;
		private $especie;
		
		//serviçoes/operaçoes
		public function dormir(){
				echo "dormindo";
		}
		
		public function comer(){
				echo "comendo";
		}
		//encapsulamento
		public function getSexo(){
			return $this->sexo;	
		}
		
		public function getEspecie(){
			return $this->especie;	
		}
		
		public function setSexo($novoSexo){
			$this->sexo = $novoSexo;	
		}
		
		public function setEspecie($novaEspecie){
			$this->especie = $novaEspecie;	
		}
		
	}
?>