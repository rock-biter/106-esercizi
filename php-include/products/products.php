<?php

include __DIR__ . '/../partials/session.php';
include __DIR__ . '/../partials/template/header.php';

$username = $_SESSION['username'] ?? '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prodotti</title>
</head>

<body>

  <h1>Ciao <?php echo $username; ?></h1>

  lista di prodotti
</body>

</html>