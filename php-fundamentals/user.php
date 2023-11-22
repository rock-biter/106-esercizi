<?php

$user = [
  'name' => 'Giangi',
  'age' => rand(33, 56),
  'email' => 'giangi@gmail.com',
  'is_youtuber' => true
];


var_dump($user['name']);


$user['lastname'] = 'Lomarco';



$user[] = '25469';

var_dump($user);
