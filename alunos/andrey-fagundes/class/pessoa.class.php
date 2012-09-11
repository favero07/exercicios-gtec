<?php
	class Pessoa extends Mamifero{
		private $rg;
		private $computador;
		private $carro;
		private $dtNasc;
		
		//serviçoes/operaçoes
		public function calcIdade(){
				echo "calculando";
		}
		
		//encapsulamento
		public function getRg(){
			return $this->rg;	
		}
		
		public function getDtNasc(){
			return $this->dtNasc;	
		}
		
		public function getCarro(){
			return $this->carro;	
		}
		
		public function getComputador(){
			return $this->computador;	
		}
		
		public function setCarro($novoCarro){
			$this->carro = $novoCarro;	
		}
		
		public function setComputador($novoComputador){
			$this->computador = $novoComputador;	
		}
		
		public function setRg($novoRg){
			$this->rg = $novoRg;	
		}
		
		public function setDtNasc($novaDtNasc){
			$this->dtNasc = $novaDtNascr;	
		}
		
		
		
	}
?>