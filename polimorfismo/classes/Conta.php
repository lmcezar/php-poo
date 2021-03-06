<?php

namespace Classes;
abstract class Conta {

  protected $saldo;

  public function __construct($saldo = 0)
  {
    $this->saldo = $saldo;
  } 

  public function deposita($valor){
    $this->setSaldo($this->getSaldo() + $valor);;
  }
  public function saca($valor){
    if($this->getSaldo() >= $valor){
      $this->setSaldo($this->getSaldo() - $valor);
    } else{
      echo "Saldo insuficiente";
    }
    
  }
  public function imprimeExtrato(){
    echo "<p> Saldo: {$this->getSaldo()} </p>";
  }


  /**
   * Get the value of saldo
   */ 
  public function getSaldo()
  {
    return $this->saldo;
  }

  /**
   * Set the value of saldo
   *
   * @return  self
   */ 
  public function setSaldo($saldo)
  {
    $this->saldo = $saldo;

    return $this;
  }
}
?>