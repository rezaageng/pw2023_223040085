<?php
require '../views/partials/admin/header.php';
require '../views/partials/admin/navbar.php';
?>

<main class="max-w-7xl m-auto p-4">
  <form action="" method="post" enctype="multipart/form-data">
    <input value="<?= $news['id'] ?>" type="text" name="id" id="id" class="hidden">
    <input value="<?= $news['image'] ?>" type="text" name="oldImage" id="oldImage" class="hidden">
    <div class="flex justify-between items-center mb-4">
      <h1 class="font-bold text-xl">Create News</h1>
      <button name="publish" class="bg-indigo-600 px-4 py-2 rounded-xl mb-4">Publish</button>
    </div>
    <div class="bg-gray-800 p-4 rounded-xl">
      <div class="flex flex-col gap-4">
        <div class="flex flex-col gap-2">
          <label for="title">Title</label>
          <input value="<?= $news['title'] ?>" type="text" name="title" id="title" class="border bg-gray-700 caret-teal-600 border-gray-600 rounded-lg p-2">
        </div>
        <div class="flex flex-col gap-2">
          <label for="content">Content</label>
          <textarea name="content" id="content" cols="30" rows="10" class="border bg-gray-700 caret-teal-600 border-gray-600 rounded-lg p-2"><?= $news['content'] ?></textarea>
        </div>
        <div class="flex flex-col gap-2">
          <label for="image">Image</label>
          <img src="../images/<?= $news['image'] ?>" alt="" class="w-64 h-auto">
          <input type="file" name="image" id="image" class="border bg-gray-700 caret-teal-600 border-gray-600 rounded-lg p-2">
        </div>
        <div class="flex flex-col gap-2">
          <label for="category">Category</label>
          <select name="category" id="category" class="border bg-gray-700 caret-teal-600 border-gray-600 rounded-lg p-2">
            <option value="ANIME" <?php if ($news['category'] === 'ANIME') echo 'selected'; ?>>Anime</option>
            <option value="GAMES" <?php if ($news['category'] === 'GAMES') echo 'selected'; ?>>Games</option>
            <option value="OTHER" <?php if ($news['category'] === 'OTHER') echo 'selected'; ?>>Other</option>
          </select>
        </div>
  </form>
</main>

<?php require '../views/partials/admin/footer.php' ?>