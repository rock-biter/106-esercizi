<?php

require_once __DIR__ . '/../Traits/Location.php';
require_once __DIR__ . '/Address.php';

class Building
{

  use Location;

  public $name;

  function __construct($name, Address $address)
  {

    $this->name = $name;
    $this->setAddress($address);
  }
}
