<?php

// recuperare il parametro dal $_POST
$new_todo = $_POST['todo'] ?? '';

// var_dump($new_todo);
$response = [
  'success' => true,
];

if ($new_todo) {

  // leggere il contenuto del file json
  $todos_string = file_get_contents('./todos.json');
  // decodificare il file json per ottenere un array di todos
  $todos = json_decode($todos_string, true);

  // var_dump($todos);

  // pushare la nuova todo nell'array
  $todos[] = $new_todo;

  $response['todos'] = $todos;

  // risalvare il file:
  // - codificare la stringa json dall'array di todos
  $todos_string = json_encode($todos);
  // - salvare il file con il nuovo contenuto
  file_put_contents('./todos.json', $todos_string);
} else {

  $response['success'] = false;
  $response['message'] = 'Todo params is required!';
}


// dare una response in formato json
header('Content-type: application/json');
echo json_encode($response);
