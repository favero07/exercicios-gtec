<?php
	class Pessoa extends Animal{
		private $rg;
		private $dataNasc;
				
		public function calcIdade(){
			
		}
		public function getRg(){
			return $this->rg;
		}
		public function setRg($novoRg){
			$this->rg = $novoRg;
		}
		public function getDataNasc(){
			return $this->dataNasc;
		}
		public function setDataNasc($novaDataNasc){
			$this->dataNasc = $novaDataNasc;
		}
		
	}
?>