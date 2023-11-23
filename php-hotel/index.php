<?php

$has_parking = isset($_GET['has_parking']) ? true : false;

var_dump($has_parking);

$hotels = [

  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];

// foreach ($hotels as $hotel) {
//   var_dump($hotel['name']);
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel</title>
</head>

<body>

  <h1>Hotel</h1>

  <div>
    <form action="" method="GET">
      <input id="has_parking" <?php echo $has_parking ? 'checked' : ''; ?> type="checkbox" name="has_parking">
      <label for="has_parking">Ha il parcheggio</label>
      <input type="submit" value="filtra">
    </form>
    <!-- <a href="<?php echo $has_parking ? './' : '?has_parking=false'; ?>">mostro solo con parcheggio</a> -->
  </div>

  <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Descrizione</th>
        <th>Parcheggio</th>
        <th>Voto</th>
        <th>Distanza centro</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($hotels as $hotel) {

        if ($hotel['parking'] === $has_parking || !$has_parking) {
      ?>
          <tr>
            <td><?php echo $hotel['name']; ?></td>
            <td><?= $hotel['description']; ?></td>
            <td><?= $hotel['parking'] ? 'si' : 'no'; ?></td>
            <td>
              <?php

              for ($i = 0; $i < 5; $i++) {
                if ($i < $hotel['vote']) {
              ?>
                  <span>O</span>
                <?php
                } else {
                ?>
                  <span>-</span>
              <?php
                }
              }

              ?>
            </td>
            <td><?php echo $hotel['distance_to_center'] ?> km</td>
          </tr>
      <?php
        }
      }
      ?>
    </tbody>

  </table>

</body>

</html>