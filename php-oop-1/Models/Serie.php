<?php

require_once __DIR__ . '/Production.php';

class Serie extends Production
{
  protected $season;

  function __construct($_title, string $_lang, int $_season = 1, int $_rating = 0)
  {

    parent::__construct($_title, $_lang, $_rating);
    $this->setSeason($_season);
  }

  public function setSeason(int $_season)
  {
    if (is_numeric($_season) && $_season >= 1) {
      $this->season = $_season;
    }
  }

  public function getSeason()
  {
    return $this->season;
  }

  public function getDetails()
  {
    $details = parent::getDetails();

    return $details . "<br>Season: $this->season";
  }
}
