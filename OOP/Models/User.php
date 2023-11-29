<?php

require_once __DIR__ . '/Address.php';
require_once __DIR__ . '/../Traits/Location.php';

class User
{

  use Location;

  public $name;
  public $last_name;
  public $full_name;
  public $age;
  public $job;
  public $is_alive = true;
  protected $sconto;

  function __construct(String $_name, $_last_name, Int $_age, $_job, Address $_address)
  {
    $this->name = $_name;
    $this->last_name = $_last_name;
    $this->full_name = $_name . ' ' . $_last_name;
    // $this->address = $_address;
    $this->setAddress($_address);
    // $this->age = $_age;
    $this->setAge($_age);
    // $this->setSconto();
    $this->job = $_job;
  }

  public function setSconto()
  {
    if ($this->age > 65) {
      $this->sconto = 15;
    } else {
      $this->sconto = 0;
    }
  }

  public function getSconto()
  {
    return $this->sconto;
  }

  public function saluta()
  {
    echo "Ciao mi chiamo " . $this->name . ' e vivo a ' . $this->getCity() . '.';
  }

  public function setAge($age)
  {
    if (is_numeric($age) && $age >= 0) {
      $this->age = intval($age);
    } else {
      $this->age = 0;
      var_dump('Il parametro $age non è corretto');
    }

    $this->setSconto();
  }

  function getCity()
  {
    return $this->address?->city;
    // if (is_null($this->address)) {
    //   return null;
    // } else {
    //   return $this->address->city;
    // }
  }

  public function getAge()
  {
    return $this->age;
  }
}
