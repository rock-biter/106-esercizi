<?php

$persona = [
  'name' => 'Gianluca',
  'age' => 33,
  'job' => 'freelancer'
];

var_dump($persona);

class Address
{

  public $city;
  public $street;
  public $postcode;

  function __construct($_street, $_city, $_postcode)
  {

    $this->street = $_street;
    $this->city = $_city;
    $this->postcode = $_postcode;
  }
}

class User
{
  public $name;
  public $last_name;
  public $full_name;
  public $age;
  public $job;
  public $is_alive = true;
  public $address;

  function __construct(String $_name, $_last_name, Int $_age, $_job, Address $_address)
  {
    $this->name = $_name;
    $this->last_name = $_last_name;
    $this->full_name = $_name . ' ' . $_last_name;
    $this->address = $_address;
    // $this->age = $_age;
    $this->setAge($_age);
    $this->job = $_job;
  }

  public function saluta()
  {
    echo "Ciao mi chiamo " . $this->name . ' e vivo a ' . $this->getCity() . '.';
  }

  public function setAge($age)
  {
    if (is_numeric($age) && $age >= 0) {
      $this->age = intval($age);
    } else {
      $this->age = 0;
      var_dump('Il parametro $age non è corretto');
    }
  }

  function getStringAddress()
  {
  }

  function getCity()
  {
    return $this->address?->city;
    // if (is_null($this->address)) {
    //   return null;
    // } else {
    //   return $this->address->city;
    // }
  }

  public function getAge()
  {
    return $this->age;
  }
}

$address1 = new Address('Via di la, 64', 'Modena', '45986');
$address2 = new Address('Viale carrozzi, 124', 'Torino', '10356');
$address3 = new Address('Via Cammello, 9', 'Ferrara', '44120');

$gian = new User('Gianluca', 'Fracci', -10, 'freelancer', $address1);
$maria = new User('Maria', 'Fracci', 16, null, $address2);
$carlo = new User('Carlo', 'Fracci', 45, 'Maestro', $address3);
// $gian->name = 'Gianluca';
// // $gian->age = '33 anni';
// $gian->setAge(22);
// $gian->job = 'freelancer';

// var_dump('Ciao mi chiamo ' . $gian->name . ' e ho ' . $gian->getAge() . ' anni.');

$people = [
  $gian,
  $maria,
  $carlo,
  new User('Pippo', 'Spalm', 23, 'Politico', new Address('Casa Romei', 'Ferrara', '44121'))
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
      <?php $user->saluta() ?>
    </p>
  </div>

<?php
}


// var_dump($gian, $maria, $carlo);
