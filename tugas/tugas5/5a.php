<?php
$students = [
  [
    "nrp" => "223040085",
    "name" => "Reza Ageng Trihandoko",
    "email" => "reza@gmail.com",
    "major" => "Informatics Engineering",
    "image" => "https://i.pinimg.com/736x/ce/76/d7/ce76d7a85ca3ae0348fba8c00bd5da28.jpg"
  ],
  [
    "nrp" => "223040086",
    "name" => "Amamiya Ren ",
    "email" => "ren@gmain.com",
    "major" => "Informatics Engineering",
    "image" => "https://pbs.twimg.com/media/Fn4Gq2zaEAErB7F?format=jpg&name=large"
  ],
  [
    "nrp" => "223040087",
    "name" => "Kaedehara Kazuha",
    "email" => "kazuha@gmail.com",
    "major" => "Informatics Engineering",
    "image" => "https://pbs.twimg.com/media/Fokh-O_aAAAvV6i?format=jpg&name=large"
  ],
  [
    "nrp" => "223040088",
    "name" => "Kamisato Ayaka",
    "email" => "ayaka@gmail.com",
    "major" => "Informatics Engineering",
    "image" => "https://pbs.twimg.com/media/Fo60pxTagAArB7c?format=jpg&name=4096x4096"
  ],
  [
    "nrp" => "223040089",
    "name" => "Yoshizawa Kasumi",
    "email" => "sumi@gmail.com",
    "major" => "Informatics Engineering",
    "image" => "https://pbs.twimg.com/media/FNf1KuHagAANqRS?format=jpg&name=4096x4096"
  ],
  [
    "nrp" => "223040090",
    "name" => "Vestia Zeta",
    "email" => "zeta@gmail.com",
    "major" => "Informatics Engineering",
    "image" => "https://pbs.twimg.com/media/Fo4JRTMaAAEIF0M?format=jpg&name=large"
  ],
  [
    "nrp" => "223040091",
    "name" => "Lumine",
    "email" => "lumine@gmail.com",
    "major" => "Informatics Engineering",
    "image" => "https://pbs.twimg.com/media/Fp0v2VbacAE4uGo?format=jpg&name=large"
  ],
  [
    "nrp" => "223040092",
    "name" => "Scaramouche",
    "email" => "scara@gmail.com",
    "major" => "Informatics Engineering",
    "image" => "https://pbs.twimg.com/media/Fp1C-VaWcAMzrNk?format=jpg&name=large"
  ],
  [
    "nrp" => "223040093",
    "name" => "Denji",
    "email" => "denji@gmail.com",
    "major" => "Informatics Engineering",
    "image" => "https://pbs.twimg.com/media/Fm7IF_vagAIjbpR?format=jpg&name=large"
  ],
  [
    "nrp" => "223040094",
    "name" => "Aurel Mayori Putri",
    "email" => "yori@gmail.com",
    "major" => "Informatics Engineering",
    "image" => "https://pbs.twimg.com/media/Fb-DQUuaAAIyxQW?format=jpg&name=4096x4096"
  ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 5a</title>
  <style>
    img {
      aspect-ratio: 1;
      width: 256px;
      object-fit: cover;
    }
  </style>
</head>

<body>
  <?php foreach ($students as $student) : ?>
    <ul>
      <li><img src=" <?= $student["image"] ?>" alt="profile pic"></li>
      <li>NRP: <?= $student["nrp"] ?></li>
      <li>Name: <?= $student["name"] ?></li>
      <li>Email: <?= $student["email"] ?></li>
      <li>Major: <?= $student["major"] ?></li>
    </ul>
  <?php endforeach ?>
</body>

</html>