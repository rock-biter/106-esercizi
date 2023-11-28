<?php

include __DIR__ . '/db.php';

$index = $_POST['id'] ?? null;
// var_dump($index);

$response = [
  'success' => true,
];

if ($index !== null && is_numeric($index)) {

  $index = intval($index);
  // var_dump($todos);

  $removed = array_splice($todos, $index, 1);
  // // var_dump($index);
  // // var_dump($todos);
  // var_dump($removed);
  $response['results'] = $todos;

  file_put_contents('./todos.json', json_encode($todos));
} else {
  $response['success'] = false;
  $response['message'] = 'Parametro id non velido o assente';
}

header('Content-Type: application/json');
echo json_encode($response);
