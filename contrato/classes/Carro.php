<?php

namespace Classes;
use Interfaces\ICaracteristicas;

class Carro extends Veiculo implements ICaracteristicas 
{

  
  public function exibeNome()
  {
    echo "<p>Nome do carro: {$this->getNome()}</p>";
  }
  public function exibeMarca(){
    echo "<p>Marca: {$this->getMarca()}</p>";
  }
  public function exibeModelo(){
    echo "<p>Modelo: {$this->getModelo()}</p>";
  }

}

?>