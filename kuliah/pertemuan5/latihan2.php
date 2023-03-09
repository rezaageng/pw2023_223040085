<?php
$animals = ['😸', '🐶', '🐰', '🐻', '🦜'];
$foods = ['🌭', '🍔', '🍟', '🍕', '🍗'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan2</title>
</head>

<body>
  <h2>Animal List</h2>
  <ul>
    <?php for ($i = 0; $i < count($animals); $i++) {  ?>
      <li><?= $animals[$i] ?></li>
    <?php } ?>
  </ul>
  <h2>Food List</h2>
  <ul>
    <?php for ($i = 0; $i < count($foods); $i++) { ?>
      <li><?= $foods[$i] ?></li>
    <?php } ?>
  </ul>
  <hr>
  <h2>Animal List</h2>
  <ol>
    <?php foreach ($animals as $animal) { ?>
      <li><?= $animal ?></li>
    <?php } ?>
  </ol>
  <h2>Food List</h2>
  <ol>
    <?php foreach ($foods as $food) { ?>
      <li><?= $food ?></li>
    <?php } ?>
</body>

</html>