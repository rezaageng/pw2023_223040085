<?php
$hardware = ['motherboard', 'processor', 'hardisk', 'pc cooler', 'vga card', 'ssd'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 4b</title>
</head>

<body>
  <h2>Macam-macam perangkat keras komputer</h2>
  <ol>
    <?php foreach ($hardware as $item) { ?>
      <li><?= $item ?></li>
    <?php } ?>
  </ol>
  <h2>Macam-macam perangkat keras komputer baru</h2>
  <ol>
    <?php
    array_push($hardware, 'card reader', 'modem');
    sort($hardware);
    foreach ($hardware as $item) { ?>
      <li><?= $item ?></li>
    <?php } ?>
  </ol>
</body>

</html>