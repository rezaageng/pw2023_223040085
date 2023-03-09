<?php
$animals = ['😸', '🐶', '🐰', '🐻', '🦜'];
$foods = ['🌭', '🍔', '🍟', '🍕', '🍗'];
$students = ['rezaa', 'azhar', 'fawas', 'faris', 'pandu']
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 3</title>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
  <?php foreach ($students as $i => $student) { ?>
    <ul>
      <li>Nama: <?= $student ?></li>
      <li>Makanan Favorit: <?= $foods[$i] ?></li>
      <li>Binatang: <?= $animals[$i] ?></li>
    </ul>
  <?php } ?>
</body>

</html>