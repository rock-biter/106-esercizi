<?php

require_once __DIR__ . '/conn.php';
require_once __DIR__ . '/serve.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';


$md5_password = md5($password);

// var_dump($username, $md5_password);

login($conn, $username, $md5_password);

header('Location: ./index.php');
