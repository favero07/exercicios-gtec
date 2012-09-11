<?php 
	class Animal{

		private $sexo;
		private $especie;


		public function dormir(){
			echo "O animal esta dormindo!";
		}
		public function acordar(){
			echo "O animal esta acordado!";
		}


		//encapsulamento

		public function getSexo(){
			return $this->sexo;
		}

		public function getEspecie(){
			return $this->especie;
		}

		//funcoes de entrada de valor

		public function setSexo($novoSexo){
			return $this->sexo = $novoSexo;
		}

		public function setEspecie($novaEspecie){
			return $this->especie = $novaEspecie;
		}
	}
 ?>