<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production
{

  protected $profit;
  protected $duration;

  function __construct($_title, string $_lang, int $_profit, int $_duration, int $_rating = 0)
  {

    parent::__construct($_title, $_lang, $_rating);
    $this->setProfit($_profit);
    $this->setDuration($_duration);
  }

  public function setProfit(int $_profit)
  {
    if (is_numeric($_profit) && $_profit >= 0) {
      $this->profit = $_profit;
    }
  }

  public function getProfit()
  {
    return $this->profit;
  }

  public function setDuration(int $_duration)
  {
    if (is_numeric($_duration) && $_duration >= 0) {
      $this->duration = $_duration;
    }
  }

  public function getDuration($_format = 'mm')
  {
    return $this->profit;
  }

  /**
   * Get production details
   */
  public function getDetails()
  {
    $details = parent::getDetails();
    return $details . "<br> Profit: $this->profit <br> Duration: $this->duration";
  }
}
