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
