<?php
require './views/partials/header.php';
require './views/partials/navbar.php';
?>

<main class="max-w-4xl m-auto p-4 mb-16">
  <div class="flex flex-col gap-4 ">
    <h1 class="text-3xl text-center"><?= $item['title'] ?></h1>
    <a class="flex justify-center " href="print.php?id=<?= $item['id'] ?>" target="_blank">
      <div class="flex gap-2 bg-teal-600 px-2 py-1 rounded-lg">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff">
          <path d="M0 0h24v24H0V0z" fill="none" />
          <path d="M19 8h-1V3H6v5H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zM8 5h8v3H8V5zm8 12v2H8v-4h8v2zm2-2v-2H6v2H4v-4c0-.55.45-1 1-1h14c.55 0 1 .45 1 1v4h-2z" />
          <circle cx="18" cy="11.5" r="1" />
        </svg>
        <span>Print</span>
      </div>
    </a>
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