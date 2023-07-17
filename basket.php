<?php

$matches = [
  [
    'home' => [
      'team' => 'VL Pesaro',
      'points' => 85
    ],
    'guest' => [

      'team' => 'Brescia',
      'points' => 76
    ]
  ],
  [
    'home' => [
      'team' => 'Olimpia Milano',
      'points' => 55
    ],
    'guest' => [

      'team' => 'Virtus Bologna',
      'points' => 60
    ]
  ],
  [
    'home' => [
      'team' => 'Trieste',
      'points' => 45
    ],
    'guest' => [

      'team' => 'Dinamo Sassari',
      'points' => 89
    ]
  ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta team="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basket Matches</title>
</head>

<body>

  <main>
    <h1>Matches list:</h1>
    <ul>
      <?php foreach ($matches as $match) : ?>
        <li>
          <?= $match['home']['team'] ?> - <?= $match['guest']['team'] ?> | <?= $match['home']['points'] ?>-<?= $match['guest']['points'] ?>
        </li>
      <?php endforeach ?>
    </ul>
  </main>

</body>

</html>