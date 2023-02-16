<?php
$angka = 85;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tugas 1b</title>
</head>

<body>
  <span>Aku adalah angka <b><?= $angka ?></b></span>
  <br>
  <span>Jika aku dikali 5, maka aku sekarang menjadi
    <b>
      <?php
      $angka = $angka * 5;
      echo $angka;
      ?>
    </b>
  </span>
  <br>
  <span>Jika, aku dibagi 2, maka aku sekarang menjadi
    <b>
      <?php
      $angka /= 2;
      echo $angka;
      ?>
    </b>
  </span>
  <br>
  <span>
    Jika aku ditambah 75, maka aku sekarang menjadi
    <b>
      <?php
      $angka += 75;
      echo $angka;
      ?>
    </b>
  </span>
  <br>
  <span>
    Jika aku dikurangi 20, maka aku sekarang menjadi
    <b>
      <?php
      $angka -= 20;
      echo $angka;
      ?>
  </span>
</body>

</html>