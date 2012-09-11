<?php
	class PessoaJuridica extends Pessoa{
		private $cnpj;

		//encapsulamento
		public function getCnpj(){
			return $this->cnpj;	
		}
		
		public function setCnpj($novoCnpj){
			$this->cnpj = $novoCnpj;	
		}
		
	}
?>