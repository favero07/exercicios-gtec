<?php 
	require_once "animal.class.php";
	class Mamifero extends Animal{

		
		private $genero;
		private $alimentacao;

		public function amamentar(){
			echo "O mamifero amamenta seus filhotes!";
		}

		//encapsulamento

		public function getGenero(){
			return $this->genero;
		}

		public function getAlimentacao(){
			return $this->alimentacao;
		}

		//funcoes de entrada de valor

		public function setGenero($novoGenero){
			return $this->genero = $novoGenero;
		}

		public function setAlimentacao($novaAlimentacao){
			return $this->alimentacao = $novaAlimentacao;
		}
	}
 ?>