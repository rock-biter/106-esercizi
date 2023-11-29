<?php

require_once __DIR__ . '/../Models/Address.php';

trait Location
{
  public $address;

  public function setAddress(Address $_address)
  {
    $this->address = $_address;
  }

  function getStringAddress()
  {
    return "{$this->address->street} , {$this->address->city} {$this->address->postcode}";
  }
}
