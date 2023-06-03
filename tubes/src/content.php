<?php
require_once '../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

require './helpers/helpers.php';

$id = $_GET['id'];

if (!$id) {
  header('Location: index.php');
  exit;
}

$item = query("SELECT * FROM news WHERE id = $id")[0];
$comments = query("SELECT comment.comment, comment.created_at FROM comment WHERE comment.news_id = $id ORDER BY created_at DESC");

if (isset($_POST['submit-comment'])) {
  if (comment($_POST) > 0) {
    echo "
      <script>
        document.location.href = 'content.php?id=$id';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data gagal ditambahkan!');
      </script>
    ";
  }
}


require './views/content.view.php';
