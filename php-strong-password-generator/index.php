<?php

function generatePassword($len)
{
  $lowercase_chars = 'abcdefghilmnopqrstuvz';
  $uppercase_chars = strtoupper($lowercase_chars);
  $number_chars = '0123456789';
  $symbol_chars = '$#&{}[]@';

  $chars = $lowercase_chars . $uppercase_chars . $number_chars . $symbol_chars;

  $max = strlen($chars) - 1;
  $password = '';

  for ($i = 0; $i < $len; $i++) {
    // prendere un carattare random da qualche parte
    $charIndex = rand(0, $max);
    $char = $chars[$charIndex];
    $password .= $char;
  }

  return $password;
}

$length = $_GET['length'] ?? false;

if ($length) {
  $length = intval($length);
}

var_dump($length);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password GENERATOR</title>
</head>

<body>
  <form action="" method="GET">
    <input required type="number" name="length" value="<?php echo $length ? $length :  16 ?>" min="6" max="32">
    <input type="submit" value="Genera">
  </form>

  <?php

  if ($length) {
  ?>
    <h1>Passrowd: <?php echo generatePassword($length); ?></h1>
  <?php
  }

  ?>

</body>

</html>