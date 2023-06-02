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

if (isset($_POST['publish'])) {
  if (createNews($_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'index.php';
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

require '../views/admin/create.view.php';
