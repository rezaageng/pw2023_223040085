<?php
$title = 'News / ';

require './views/partials/header.php';
require './views/partials/navbar.php';
?>

<main class="max-w-7xl m-auto p-4">
  <div class="flex justify-between items-center mb-8">
    <div>
      <button class="bg-gray-800 px-2 py-1 rounded-lg" onclick="ramoveCategory()">All</button>
      <button class="bg-gray-800 px-2 py-1 rounded-lg" onclick="addCategoryToUrl('anime')">Anime</button>
      <button class="bg-gray-800 px-2 py-1 rounded-lg" onclick="addCategoryToUrl('games')">Games</button>
      <button class="bg-gray-800 px-2 py-1 rounded-lg" onclick="addCategoryToUrl('other')">Other</button>
    </div>
    <form action="" method="post">
      <input class="bg-gray-800 border rounded-lg border-gray-500 px-2 py-1" type="text" name="keyword" autocomplete="off" placeholder="Search.." id="keyword" onchange="search('news')">
    </form>
  </div>
  <div id="news" class="grid w-full grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-3 md:gap-3 lg:grid-cols-4 mb-16">
    <?php foreach ($news as $item) : ?>
      <div class="group">
        <a class="flex flex-col gap-2" href="./content.php?id=<?= $item['id'] ?>">
          <div class="rounded-xl overflow-clip aspect-video object-cover">
            <img class="group-hover:scale-110 transition duration-200 w-full h-full object-cover" src="./images/<?= $item['image'] ?>" alt="banner">
          </div>
          <div class="text-sm">
            <span><?= $item['category'] ?></span>
            <span class="text-white/50"><?= $item['created_at'] ?></span>
          </div>
          <h1 class="line-clamp-2"><?= $item['title'] ?></h1>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</main>

<script>
  const addCategoryToUrl = (category) => {
    document.location.href = `./news.php?category=${category}`
  }

  const ramoveCategory = () => {
    document.location.href = `./news.php`
  }
</script>

<?php
require './views/partials/footer.php';
?>