<?php

$boolean = [
  'classes' => [
    [
      'number' => 106,
      'students' => [
        [
          'name' => 'Marta',
          'ex' => []
        ],
        [
          'name' => 'Davide'
        ]
      ]
    ],
    [
      'number' => 124,
      'students' => [
        [
          'name' => 'Pippo',
          'ex' => []
        ],
        [
          'name' => 'Ciuseppe'
        ]
      ]
    ],
  ],
  'teachers' => [
    [
      'name' => 'Gianluca',
      'lastname' => 'Lomarco'
    ],
    [
      'name' => 'Adriano',
      'lastname' => 'Grimaldi'
    ]
  ]
];


foreach ($boolean['classes'] as $class) {
  var_dump($class['number']);
  foreach ($class['students'] as $student) {
    var_dump($student['name']);
  }
}


?>

<script src="./js/app.js"></script>