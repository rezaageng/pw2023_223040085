<?php
require '../views/partials/admin/header.php';
require '../views/partials/admin/navbar.php';
?>

<main class="max-w-7xl m-auto p-4">
  <div class="mb-4 w-full flex justify-between items-center">
    <h1 class="text-xl font-bold">News</h1>
    <button onclick="document.location.href = './create.php'" class="bg-teal-600 rounded-xl px-4 py-2">Add</button>
  </div>
  <div class="flex gap-4 flex-col">
    <?php foreach ($news as $item) : ?>
      <div class="flex flex-col w-full bg-gray-800 rounded-xl gap-4 overflow-clip">
        <div class="p-4">
          <h1 class="text-xl font-bold line-clamp-1"><?= $item['title'] ?></h1>
          <p class="line-clamp-2"><?= $item['content'] ?></p>
        </div>
        <div class="flex justify-around">
          <a class="bg-indigo-600 flex flex-1 p-2 justify-center" href="./edit.php?id=<?= $item['id'] ?>">Edit</a>
          <a class="bg-rose-600 flex flex-1 p-2 justify-center" href="./delete.php?id=<?= $item['id'] ?>" onclick="return confirm('Are you sure to delete')">Delete</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>