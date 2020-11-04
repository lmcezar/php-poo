<?php

require_once 'autoload.php';

use Classes\Cadastro;

$servidor = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];


$cadastro = new Cadastro($nome, $telefone, $email);

$cadastro->inserir($servidor, $nome, $telefone, $email);



header('Location: lista_usuarios.php');

?>