<?php
require './views/partials/header.php';
require './views/partials/navbar.php';
?>

<main class="max-w-4xl m-auto p-4 mb-16">
  <div class="flex flex-col gap-4 ">
    <h1 class="text-3xl text-center"><?= $item['title'] ?></h1>
    <img src="./images/<?= $item['image'] ?>" alt="image" class="w-full">
    <p class="text-justify"><?= $item['content'] ?></p>
  </div>
  <div class="mt-4 flex flex-col gap-2 border border-t-white border-b-transparent border-l-transparent border-r-transparent pt-4">
    <h1 class="text-2xl">Comments</h1>
    <form action="" method="post">
      <input name="newsId" type="hidden" name="id" value="<?= $item['id'] ?>">
      <textarea name="comment" id="comment" rows="3" class="w-full bg-gray-800 border rounded-lg border-gray-500 px-2 py-1"></textarea>
      <div class="flex justify-end">
        <button name="submit-comment" class="bg-teal-600 px-2 py-1 rounded-lg">Comment</button>
      </div>
    </form>
    <?php foreach ($comments as $comment) : ?>
      <div class="bg-gray-700 flex flex-col gap-2 p-4 rounded-lg">
        <p class="text-justify"><?= $comment['comment'] ?></p>
        <span class="text-xs"><?= $comment['created_at'] ?></span>
      </div>
    <?php endforeach; ?>
  </div>
</main>

<?php require './views/partials/footer.php'; ?>