<?php


function login($conn, $username, $password)
{
  // check session exist
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

  $stmt = $conn->prepare('SELECT `id`, `username` FROM `users` WHERE `username` = ? AND `password` = ?');

  $stmt->bind_param('ss', $username, $password);
  $stmt->execute();

  $result = $stmt->get_result();

  if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = $row['id'];
  }
}
