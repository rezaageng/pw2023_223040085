<?php
$film = [
  [
    'image' => './img/suzume.jpeg',
    'title' => 'Suzume no Tojimari',
    'year' => '2022',
    'genre' => ['Adventure', 'Drama', 'Fantasy'],
    'characters' => ['Suzume', 'Souta', 'Daijin', 'Serizawa'],
    'director' => 'Makoto Shinkai'
  ],
  [
    'image' => './img/tenki.jpg',
    'title' => 'Tenki no Ko',
    'year' => '2019',
    'genre' => ['Drama', 'Fantasy', 'Romance'],
    'characters' => ['Hina', 'Hodaka', 'Taki', 'Mitsuha'],
    'director' => 'Makoto Shinkai'
  ],
  [
    'image' => './img/kimi.jpg',
    'title' => 'Kimi no Nawa',
    'year' => '2016',
    'genre' => ['Adventure', 'Drama', 'Romance', 'Supernatural'],
    'characters' => ['Mitsuha', 'Taki',],
    'director' => 'Makoto Shinkai'
  ],
  [
    'image' => './img/cat.jpg',
    'title' => 'A Whisker Away',
    'year' => '2020',
    'genre' => ['Comedy', 'Drama', 'Fantasy', 'Romance'],
    'characters' => ['Hinode', 'Miyo'],
    'director' => 'Junichi Satou'
  ],
  [
    'image' => './img/horimiya.jpg',
    'title' => 'Horimiya  ',
    'year' => '2021',
    'genre' => ['Comedy', 'Romance'],
    'characters' => ['Miyamura', 'Hori',],
    'director' => 'HERO'
  ],
]; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Anime List</h1>
  <?php foreach ($film as $anime) : ?>
    <ul>
      <li><img src="<?= $anime['image'] ?>" alt="poster"></li>
      <li>Judul: <?= $anime['title'] ?></li>
      <li>Tahun: <?= $anime['year'] ?></li>
      <li>Genre:
        <?php
        foreach ($anime['genre'] as $genre) {
          echo $genre;
        }
        ?>
      </li>
      <li>Karakter:
        <?php
        foreach ($anime['characters'] as $character) {
          echo $character . ', ';
        }
        ?>
      </li>
      <li>Tahun: <?= $anime['director'] ?></li>
    </ul>
  <?php endforeach ?>
</body>

</html>