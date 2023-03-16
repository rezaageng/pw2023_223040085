<?php
// * multidimensional array
$students = [
  ['rezaa', '😸', '🌭'],
  ['azhar', '🐶', '🍔'],
  ['fawas', '🐰', '🍟'],
  ['faris', '🐻', '🍕'],
  ['pandu', '🦜', '🍗']
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1</title>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
  <?php foreach ($students as  $student) { ?>
    <ul>
      <li>Nama: <?= $student[0] ?></li>
      <li>Makanan Favorit: <?= $student[2] ?></li>
      <li>Binatang: <?= $student[1] ?></li>
    </ul>
  <?php } ?>
</body>

</html>