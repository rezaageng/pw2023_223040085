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

if (!isset($_GET['id'])) {
  header('Location: index.php');
  exit;
}

$id = $_GET['id'];

$news = query("SELECT * FROM news WHERE id = $id")[0];

if (isset($_POST["publish"])) {


  if (editNews($_POST) > 0) {
    echo "
				<script>
					alert('Data berhasil diubah');
					document.location.href = 'index.php'
				</script>
		";
  } else {
    echo "<script>
					alert('Data Gagal diubah');
					document.location.href = 'ubah.php'
				</script> <br>";
    echo mysqli_error($conn);
  }
}

require '../views/admin/edit.view.php';
