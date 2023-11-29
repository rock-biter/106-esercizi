<?php

require_once __DIR__ . '/Models/Address.php';
require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Employee.php';

$persona = [
  'name' => 'Gianluca',
  'age' => 33,
  'job' => 'freelancer'
];

// var_dump($persona);

$address1 = new Address('Via di la, 64', 'Modena', '45986');

$employee = new Employee('Gianluca', 'Fracci', 25, 'freelancer', $address1, 3);


var_dump($employee);


// $address2 = new Address('Viale carrozzi, 124', 'Torino', '10356');
// $address3 = new Address('Via Cammello, 9', 'Ferrara', '44120');

// $gian = new User('Gianluca', 'Fracci', -10, 'freelancer', $address1);
// $maria = new User('Maria', 'Fracci', 16, null, $address2);
// $carlo = new User('Carlo', 'Fracci', 45, 'Maestro', $address3);
// $gian->name = 'Gianluca';
// // $gian->age = '33 anni';
// $gian->setAge(22);
// $gian->job = 'freelancer';

// var_dump($maria);

// var_dump('Ciao mi chiamo ' . $gian->name . ' e ho ' . $gian->getAge() . ' anni.');

$people = [
  // $employee,
  // $maria
  // $gian,
  // $maria,
  // $carlo,
  // new User('Pippo', 'Spalm', 23, 'Politico', new Address('Casa Romei', 'Ferrara', '44121'))
];
// echo User->name;
// $maria = new User();

// $maria->name = 'Maria';
// echo '<br>';
// $maria->saluta();

// var_dump($people);

foreach ($people as $user) {
?>

  <div>
    <h3><?= $user->name . ' ' . $user->last_name ?></h3>
    <p><?php echo $user->job ?></p>
    <p>
      sconto: <?php echo $user->getSconto() ?>
    </p>
    <p><?php echo $user->getStringAddress() ?></p>
  </div>

<?php
}


// var_dump($gian, $maria, $carlo);
