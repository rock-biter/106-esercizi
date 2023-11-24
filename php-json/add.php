<?php

// arriveranno da un form in POST
$name = 'Mirco';
$last_name = 'Baraldi';
$age = 85;

// recuperando i dati presenti nel file
$students_file_content = file_get_contents('./students.json');
$students = json_decode($students_file_content, true);

// aggiungedo un nuovo studente all'array php
$students[] = [
  'name' => $name,
  'last_name' => $last_name,
  'age' => $age
];

// sovrascrivere il contenuto del file con i nuovi dati aggiornati
$string = json_encode($students);
file_put_contents('./students.json', $string);

header('Location: ./index.php');
