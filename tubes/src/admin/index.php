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
require '../views/admin/index.view.php';
