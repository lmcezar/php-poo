<?php

class Fisica extends Pessoa
{
  private $cpf;

  public function __construct($nome, $cpf)
  {
    parent::__construct($nome);
    $this->cpf = $cpf;
  }

  public function validarCpf()
  {
    echo "<p>Validador de CPF a ser implementado no futuro</p>";
  }
}
