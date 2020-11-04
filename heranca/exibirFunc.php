<?php

  require_once 'autoload.php';
  

  use Classes\Funcionario;
  use Classes\Gerente;
  use Classes\Programador;


  $nome = $_POST['nome'];
  $salario = $_POST['salario'];
  $cargo = $_POST['cargo'];
  $info = $_POST['info'];

  if ($cargo == 1) {
    $funcionario = new Gerente($nome, $salario, $info);
    $funcionario->relatorioFunc();
  } else {
    $funcionario = new Programador($nome, $salario, $info);
    $funcionario->relatorioFunc();

  }

?>