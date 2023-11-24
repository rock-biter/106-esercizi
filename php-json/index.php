<?php

$string = file_get_contents('./students.json');
// var_dump($string);

$students = json_decode($string, true);
// var_dump($students);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Eta</th>
      </tr>
    </thead>
    <tbody>
      <?php

      foreach ($students as $student) {
      ?>
        <tr>
          <td><?php echo $student['name'] ?></td>
          <td><?php echo $student['last_name'] ?></td>
          <td><?php echo $student['age'] ?></td>
        </tr>
      <?php
      }

      ?>
    </tbody>
  </table>

</body>

</html>