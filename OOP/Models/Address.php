<?php

class Address
{

  public $city;
  public $street;
  public $postcode;

  function __construct($_street, $_city, $_postcode)
  {

    $this->street = $_street;
    $this->city = $_city;
    $this->postcode = $_postcode;
  }
}
