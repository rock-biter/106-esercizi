<?php

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';


$movie = new Movie('Inception', 'English', 1000000, 150, 4);
$serie = new Serie('Titanic', 'English', 5);
// $prod1->setRating(3);
// $prod1->title = 2;
// $prod1->language = 'Italiano';
// echo $prod1->getDetails();

$items = [
  new Movie('Inception', 'English', 1000000, 150, 4),
  new Movie('Inception', 'English', 1000000, 150, 4),
  new Serie('Titanic', 'English', 5),
  new Movie('Inception', 'English', 1000000, 150, 4),
  new Serie('Titanic', 'English', 5),
  new Movie('Inception', 'English', 1000000, 150, 4),
  new Serie('Titanic', 'English', 5),
];

var_dump($movie instanceof Production);

// foreach ($items as $item) {
//   echo $item->getDetails() . '<br>';
// }

function getDetails(Production $item)
{
  echo $item->getTitle();
}

// getDetails($movie);
getDetails($serie);
