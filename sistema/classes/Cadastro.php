<?php

namespace Classes;

class Cadastro 
{
 protected $nome;
 protected $telefone;
 protected $email;


 public function __construct($nome, $telefone, $email)
  {
    $this->nome = $nome;
    $this->telefone = $telefone;
    $this->email = $email;
  }

 
  
 /**
  * Get the value of nome
  */ 
 public function getNome()
 {
  return $this->nome;
 }

 /**
  * Set the value of nome
  *
  * @return  self
  */ 
 public function setNome($nome)
 {
  $this->nome = $nome;

  return $this;
 }

 /**
  * Get the value of telefone
  */ 
 public function getTelefone()
 {
  return $this->telefone;
 }

 /**
  * Set the value of telefone
  *
  * @return  self
  */ 
 public function setTelefone($telefone)
 {
  $this->telefone = $telefone;

  return $this;
 }

 /**
  * Get the value of email
  */ 
 public function getEmail()
 {
  return $this->email;
 }

 /**
  * Set the value of email
  *
  * @return  self
  */ 
 public function setEmail($email)
 {
  $this->email = $email;

  return $this;
 }

 public function inserir($servidor, $nome, $telefone, $email){
  $consultaPrep = $servidor->prepare("INSERT INTO cadastro (nome, telefone, email) VALUES (:nomeNovo, :novoTelefone, :novoEmail)");
  $consultaPrep->bindParam(':nomeNovo', $nome);
  $consultaPrep->bindParam(':novoTelefone', $telefone);
  $consultaPrep->bindParam(':novoEmail', $email);
  
  $consultaPrep->execute();
  
  $servidor = null;
 }

 public function exibir(){
      echo "<p>Nome: {$this->nome}</p>";
      echo "<p>Telefone: {$this->telefone}</p>";
      echo "<p>Email: {$this->email}</p>";
      echo "<hr></hr>";
 }



}

  
?>