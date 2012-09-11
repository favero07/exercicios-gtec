<?php
	class PessoaFisica extends Pessoa{
		private $cpf;

		//encapsulamento
		public function getCpf(){
			return $this->cpf;	
		}
		
		public function setCpf($novoCpf){
			$this->cpf = $novoCpf;	
		}
		
	}
?>