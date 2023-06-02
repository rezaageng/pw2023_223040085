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

if (deleteNews($id) > 0) {
  echo "
				<script>
					alert('Data berhasil dihapus');
					document.location.href = 'index.php'
				</script>
		";
} else {
  echo "<script>
					alert('Data Gagal dihapus');
					document.location.href = 'index.php'
				</script> <br>";
  echo mysqli_error($conn);
}
