<?php
	class Mamifero extends Animal {
		private $genero;
		private $alimentacao;
		
		//serviçoes/operaçoes
		public function amamentar(){
				echo "amamentando";
		}
		
		//encapsulamento
		public function getGenero(){
			return $this->genero;	
		}
		
		public function getAlimentacao(){
			return $this->alimentacao;	
		}
		
		public function setGenero($novoGenero){
			$this->genero = $novoGenero;	
		}
		
		public function setAlimentacao($novaAlimentacao){
			$this->alimentacao = $novaAlimentacao;	
		}
		
	}
?>