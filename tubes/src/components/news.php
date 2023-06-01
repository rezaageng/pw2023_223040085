<?php
require_once '../../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../../');
$dotenv->load();

require '../helpers/helpers.php';

$keyword = $_GET["keyword"];
$query = "SELECT * FROM news WHERE title LIKE '%$keyword%' OR content LIKE '%$keyword%' ORDER BY created_at DESC";
$news = query($query);
?>
<?php foreach ($news as $item) : ?>
  <div class="group">
    <a class="flex flex-col gap-2" href="./content.php?id=<?= $item['id'] ?>">
      <div class="rounded-xl overflow-clip aspect-video object-cover">
        <img class="group-hover:scale-110 transition duration-200 w-full h-full" src="./<?= $item['image'] ?>" alt="banner">
      </div>
      <div class="text-sm">
        <span><?= $item['category'] ?></span>
        <span class="text-white/50"><?= $item['created_at'] ?></span>
      </div>
      <h1 class="line-clamp-2"><?= $item['title'] ?></h1>
    </a>
  </div>
<?php endforeach; ?>