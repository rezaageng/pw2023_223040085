<?php
require_once '../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

require './helpers/helpers.php';

$news = query("SELECT * FROM news ORDER BY created_at DESC");

require './views/index.view.php';
