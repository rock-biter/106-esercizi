<?php

require __DIR__ . '/partials/session.php';
include __DIR__ . '/partials/template/header.php';

$username = $_POST['username'] ?? null;

if ($username) {
  $_SESSION['username'] = $username;
}

?>
<h1>index.php</h1>


<form action="" method="POST">
  <input type="text" name="username">
  <input type="submit" value="invia">
</form>
<?php

include __DIR__ . '/partials/template/footer.php';

?>