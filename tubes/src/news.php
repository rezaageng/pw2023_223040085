<?php
require_once '../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

require './helpers/helpers.php';

if (isset($_GET['category'])) {
  $category = $_GET['category'];

  if ($category === 'games') {
    $news = query("SELECT * FROM news WHERE category = 'GAMES' ORDER BY created_at DESC");
  } elseif ($category === 'anime') {
    $news = query("SELECT * FROM news WHERE category = 'ANIME' ORDER BY created_at DESC");
  } elseif ($category === 'other') {
    $news = query("SELECT * FROM news WHERE category = 'OTHER' ORDER BY created_at DESC");
  } else {
    header('Location: news.php');
    exit;
  }
} else {
  $news = query("SELECT * FROM news ORDER BY created_at DESC");
}

require './views/news.view.php';
