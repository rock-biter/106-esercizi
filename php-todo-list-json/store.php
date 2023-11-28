<?php

include __DIR__ . '/db.php';

$todo_text = $_POST['todo'] ?? '';

$todo = [
  'text' => $todo_text,
  'done' => false
];

$todos[] = $todo;

$response = [
  'success' => true,
  'results' => $todos
];

file_put_contents('./todos.json', json_encode($todos));

header('Content-Type: application/json');
echo json_encode($response);
