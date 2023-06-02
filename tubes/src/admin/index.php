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


$news = query("SELECT * FROM news WHERE user_id = $userId ORDER BY created_at DESC");


require '../views/admin/index.view.php';
