<?php

class Carro {
  private $placa;
  private $modelo;
  private $marca;
  private $ano;

  // servicos/ operacoes
  public function acelerar(){
    echo "Esta acelerando";
  }

  public function freiar(){
    echo "Esta freiando";
  }

  // encapsulamento

  public function getPlaca(){
    return $this->placa;
  }

  public function setPlaca($novaPlaca){
    $this->placa = $novaPlaca;
  }

}



