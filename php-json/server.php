<?php

$students = [
  [
    'name' => 'Gianluca',
    'last_name' => 'Lomarco',
    'age' => 33
  ],
  [
    'name' => 'Maria',
    'last_name' => 'Luppi',
    'age' => 45
  ],
  [
    'name' => 'Claudio',
    'last_name' => 'Coppoli',
    'age' => 22
  ],
];

header('Content-Type: application/json');

echo json_encode($students);
