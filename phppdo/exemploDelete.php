<?php 
$id = $_GET['id'];
$servidor = new PDO('mysql:host=localhost;dbname=livros', 'root', '');
$servidor->exec("DELETE FROM famosos WHERE id = $id");

$servidor = null;

header("Location: exemploSelect.php");
?>