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

header('Content-Type: application/json');
echo json_encode($response);
