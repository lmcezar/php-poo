<?php 

  require_once 'autoload.php';
  
  use Classes\Veiculo;
  use Interfaces\ICaracteristicas;
  use Classes\Carro;
  use Classes\Moto;
  


  if($_POST["tipo"] == 2){
     $carro = new Carro($_POST['nome'], $_POST['modelo'], $_POST['marca']);
      $carro->exibeNome();
      $carro->exibeMarca();
      $carro->exibeModelo();

     
  } else{
    $moto = new Moto($_POST['nome'], $_POST['modelo'], $_POST['marca']);
    $moto->exibeNome();
      $moto->exibeMarca();
      $moto->exibeModelo();
  }
?>






