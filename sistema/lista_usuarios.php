<?php 
  require_once 'autoload.php';
  use Classes\Cadastro;

  $servidor = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');
  $tabela = $servidor->query("SELECT codigo, nome, telefone, email FROM cadastro");


  $query = $servidor->prepare("SELECT * FROM cadastro");
  $query->execute();
  $cadastros = $query->fetchAll(PDO::FETCH_ASSOC);

  foreach($cadastros as $cadastro) {
    $cad = new Cadastro($cadastro['nome'], $cadastro['telefone'], $cadastro['email']);
    $cad->exibir();
  }

  echo '<a href="../sistema">Adicionar Novo</a>';


?>