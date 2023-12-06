<?php

// check session exist
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

require_once __DIR__ . '/conn.php';


if (isset($_SESSION['user_id'])) {
  // var_dump('utente loggato');
?>
  <p>
    <a href="./logout.php">Logout</a>
  </p>
  <?php


  $sql = 'SELECT `id`, `name` FROM `departments` ORDER BY `name` DESC';

  $result = $conn->query($sql);

  // var_dump($result);
  if ($result && $result->num_rows > 0) {


    while ($row = $result->fetch_assoc()) {

  ?>
      <div>
        <?php echo $row['name']; ?>
      </div>
  <?php

    }
  }
} else {
  var_dump('utente non loggato');

  ?>
  <form action="./login.php" method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="login">
  </form>
<?php
}
