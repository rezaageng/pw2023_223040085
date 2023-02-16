<?php
// variable is a container for storing data

$nama = 'rezaa';
$mataKuliah = 'Pemrograman Web';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pertemuan 2</title>
</head>

<body>
  <h1>
    <?php echo "hello, $nama!"; ?>
  </h1>
  <span><?= $mataKuliah ?></span>
</body>

</html>