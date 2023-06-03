<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("location: ../login.php");
  exit;
}

require_once '../../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../../');
$dotenv->load();

require '../helpers/helpers.php';

$userId = $_SESSION['id'];

$search = $_GET["search"];
$query = "SELECT * FROM news WHERE user_id = $userId AND (title LIKE '%$search%' OR content LIKE '%$search%') ORDER BY created_at DESC";
$news = query($query);
?>

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