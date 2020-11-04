<?php

namespace Classes;

abstract class Animal
{
  protected $come;

  abstract public function habitoAlimentar();

  /**
   * Get the value of come
   */ 
  public function getCome()
  {
    return $this->come;
  }

  /**
   * Set the value of come
   *
   * @return  self
   */ 
  public function setCome($come)
  {
    $this->come = $come;

    return $this;
  }
}
