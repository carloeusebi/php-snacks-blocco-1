<?php

$matches = [
  [
    'home' => [
      'name' => 'VL Pesaro',
      'points' => 85
    ],
    'guest' => [

      'name' => 'Brescia',
      'points' => 76
    ]
  ],
  [
    'home' => [
      'name' => 'Olimpia Milano',
      'points' => 55
    ],
    'guest' => [

      'name' => 'Virtus Bologna',
      'points' => 60
    ]
  ],
  [
    'home' => [
      'name' => 'Trieste',
      'points' => 45
    ],
    'guest' => [

      'name' => 'Dinamo Sassari',
      'points' => 89
    ]
  ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basket Matches</title>
</head>

<body>

  <main>
    <h1>Matches list:</h1>
    <ul></ul>
    <?php foreach ($matches as $match) : ?>

    <?php endforeach ?>

    </ul>
  </main>

</body>

</html>