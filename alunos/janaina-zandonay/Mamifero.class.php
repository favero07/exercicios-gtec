<?php
	class Mamifero extends Animal{
		private $genero;
		private $alimentacao;
				
		public function amamentar(){
			echo ("Esta amamentando!");
		}
		public function getGenero(){
			return $this->genero;
		}
		public function setGenero($novoGenero){
			$this->genero = $novoGenero;
		}
		public function getAlimentacao(){
			return $this->alimentacao;
		}
		public function setAlimentacao($novaAlimentacao){
			$this->alimentacao = $novaAlimentacao;
		}
		
	}
?>