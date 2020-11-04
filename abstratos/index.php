<?php
  require_once 'autoload.php';

  use Classes\Animal;
  use Classes\Carnivoro;
  use Classes\Herbivoro;



  $animalCarnivoro = new Carnivoro();
  $animalCarnivoro->habitoAlimentar();
  echo "<br />";
  $animelHerbivoro = new Herbivoro();
  $animelHerbivoro->habitoAlimentar();

?>