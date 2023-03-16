<?php
// * associative array
$students = [
  [
    'name' => 'rezaa',
    'pet' => '😸',
    'food' => ['🌭', '🍔',]
  ],
  [
    'name' => 'azhar',
    'pet' => '🐶',
    'food' => ['🍟', '🍕',]
  ],
  [
    'name' => 'fawas',
    'pet' => '🐰',
    'food' => ['🍗', '🍣']
  ],
  [
    'name' => 'faris',
    'pet' => '🐻',
    'food' => ['🍜', '🥞']
  ],
  [
    'name' => 'pandu',
    'pet' => '🦜',
    'food' => ['🍡', '🌮']
  ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2</title>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
  <?php foreach ($students as  $student) { ?>
    <ul>
      <li>Nama: <?= $student['name'] ?></li>
      <li>Makanan Favorit:
        <?php
        foreach ($student['food'] as $food) {
          echo $food;
        }
        ?>
      </li>
      <li>Binatang: <?= $student['pet'] ?></li>
    </ul>
  <?php } ?>
</body>

</html>