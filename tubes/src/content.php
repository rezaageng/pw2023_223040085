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


require './views/content.view.php';
