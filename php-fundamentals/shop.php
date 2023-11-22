<?php

$products = [
  0 => 'Monitor',
  'Mouse',
  'PC',
  'Carta igienica',
  'Fazzoletti'
];

// for ($i = 0; $i < count($products); $i++) {
//   var_dump($i);
//   var_dump($products[$i]);
// }

$user = [
  'name' => 'Giangi',
  'age' => 33,
  'lastname' => 'Lomarco'
];

// var_dump(count($user));
// for ($i = 0; $i < count($user); $i++) {
//   var_dump($user[$i]);
// }
$user[] = 'Ciao mamma'

// foreach ($products as $i => $productName) {
//   var_dump($productName);
// }

?>

<ul>
  <?php
  foreach ($user as $key => $value) {
    // var_dump($key, $value);
  ?>
    <li>
      <strong>
        <?php echo $key; ?>:
      </strong>
      <span>
        <?php echo $value; ?>
      </span>
    </li>
  <?php
  }
  ?>
</ul>