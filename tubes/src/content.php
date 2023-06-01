<?php
require_once '../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

require './helpers/helpers.php';
require './views/content.view.php';
