<?php

// $array = [];

function explode_string($text)
{

  $array = explode(' ', $text);

  return $array;
}

$words = explode_string('ciao mamma');

var_dump($words);


// $new_string = str_replace('mamma', 'babbo', 'Ciao mamma', $count);

// var_dump($count);
