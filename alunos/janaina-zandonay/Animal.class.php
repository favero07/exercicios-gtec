<?php
	class Animal{
		private $sexo;
		private $especie;
				
		public function comer(){
			echo ("Comendo!");
		}
		public function dormir(){
			echo ("Dormindo!");
		}
		public function getSexo(){
			return $this->sexo;
		}
		public function setSexo($novoSexo){
			$this->sexo = $novoSexo;
		}
		public function getEspecie(){
			return $this->especie;
		}
		public function setEspecie($novaEspecie){
			$this->especie = $novaEspecie;
		}
		
	}
?>