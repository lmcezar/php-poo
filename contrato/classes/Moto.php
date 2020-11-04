<?php
namespace Classes;
use Interfaces\ICaracteristicas;

class Moto extends Veiculo implements ICaracteristicas 
{
  public function exibeNome()
  {
    echo "<p>Nome da moto: {$this->getNome()}</p>";
  }
  public function exibeMarca(){
    echo "<p>Marca: {$this->getMarca()}</p>";
  }
  public function exibeModelo(){
    echo "<p>Modelo: {$this->getModelo()}</p>";
  }
}

?>