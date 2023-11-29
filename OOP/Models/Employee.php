<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Address.php';

class Employee extends User
{
  protected $level;

  function __construct(String $_name, $_last_name, Int $_age, $_job, Address $_address, int $_level)
  {

    parent::__construct($_name, $_last_name, $_age, $_job, $_address);
    $this->setLevel($_level);
  }

  public function setLevel($level)
  {
    $this->level = $level;
    $this->setSconto();
  }

  public function getLevel()
  {
    return $this->level;
  }

  public function setSconto()
  {

    if ($this->age > 65) {
      $this->sconto = 50;
    } else {
      $this->sconto = $this->level * 10;
    }
  }
}
