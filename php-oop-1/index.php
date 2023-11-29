<?php


class Production
{

  private $title;
  private $language;
  private $rating = 0;

  function __construct($_title, string $_lang, int $_rating = 0)
  {
    // $this->title = $_title;
    // $this->language = $_lang;
    // $this->rating = $_rating;
    $this->setRating($_rating);
    $this->setTitle($_title);
    $this->setLanguage($_lang);
  }

  /**
   * set title
   */
  public function setTitle(string $title)
  {
    if ($title) {
      $this->title = $title;
    }
  }

  /**
   * get title
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * set rating
   */
  public function setRating(int $rating)
  {
    if (is_numeric($rating) && $rating >= 1 && $rating <= 5) {
      $this->rating = $rating;
    }
  }

  /**
   * get rating
   */
  public function getRating()
  {
    return $this->rating;
  }

  /**
   * set language
   */
  public function setLanguage(string $lang)
  {
    if ($lang) {
      $this->language = $lang;
    }
  }

  /**
   * get language
   */

  public function getLanguage()
  {
    return $this->language;
  }

  /**
   * Get production details
   */
  public function getDetails()
  {
    return "Title: $this->title <br> Language: $this->language <br> Rating: $this->rating";
  }
}

$prod1 = new Production('Inception', 'English', 4);
$prod2 = new Production('Titanic', 'English', 5);
$prod1->setRating(3);
// $prod1->title = 2;
// $prod1->language = 'Italiano';
// echo $prod1->getDetails();

$items = [
  $prod1,
  $prod2
];

foreach ($items as $production) {
  echo $production->getDetails() . '<br>';
}
