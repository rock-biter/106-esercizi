<?php

// user name
// $user_name = $argv[1] . ' ' . $argv[2];
$user_name = $_POST['user_name'] . ' ' . $_POST['user_last_name'];

var_dump($_POST);

?>
<h1>
  Ciao Mondo!
</h1>
<p>Mi chiamo <?php echo $user_name; ?></p>
<!-- <p>Ho la bellezza di <?php echo $_GET['age'] ?> anni</p> -->