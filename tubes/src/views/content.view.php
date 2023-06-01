<?php
require './views/partials/header.php';
require './views/partials/navbar.php';
?>

<main class="max-w-4xl m-auto p-4">
  <div class="flex flex-col gap-4 mb-16">
    <h1 class="text-3xl text-center"><?= $item['title'] ?></h1>
    <img src="<?= $item['image'] ?>" alt="image" class="w-full">
    <p><?= $item['content'] ?></p>
  </div>
</main>

<?php require './views/partials/footer.php'; ?>