<?php

$todos_string = file_get_contents('./todos.json');
$todos = json_decode($todos_string, true);

// $todos = [
//   [
//     'text' => 'PHP',
//     'done' => false
//   ],
//   [
//     'text' => 'Java',
//     'done' => false
//   ],
//   [
//     'text' => 'HTML',
//     'done' => true
//   ],
//   [
//     'text' => 'CSS',
//     'done' => true
//   ]
// ];
