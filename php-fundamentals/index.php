<?php


$emails = [
  'pippo@gmail.com',
  'mariolino@gmail.com',
  'marcellino@gmail.com',
  'giangi@gmail.com'
];

$emails[] = 'marta@gmail.com';

var_dump($emails);

var_dump($_POST);
var_dump(array_key_exists('email', $_POST));

$email = isset($_POST['email']) ? $_POST['email'] : null;
// var_dump($email);
// $email = $_POST['email'] ?? null;

// $email = null;

// if (isset($_POST['email'])) {
//   $email = $_POST['email'];
// }

var_dump(in_array($email, $emails));

?>

<form action="" method="POST">

  <input type="email" name="email" placeholder="La tua email">
  <input type="submit" value="invia">

</form>

<?php

if (in_array($email, $emails)) {
  // echo '<p>La tua email è: ' . $email . '</p>';
?>
  <p>Benvenuto nel Club!</p>
<?php

} else {

?>
  <p>Accesso negato!</p>
<?php
}

?>