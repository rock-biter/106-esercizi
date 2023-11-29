<?php


class Square
{

  public $width;
  public $height;
  public static $edges = 4;

  public function __construct($dim)
  {
    $this->width = $dim;
    $this->height = $dim;
  }

  public function getArea()
  {
    return $this->width * $this->height;
  }

  public function getPerimeter()
  {
    return 4 * $this->width;
  }

  public static function getEdges()
  {
    // $this non può entrare qui dentro
    // return $this->width;
    return self::$edges;
  }
}
