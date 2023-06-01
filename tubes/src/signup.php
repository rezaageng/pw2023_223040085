<?php

require_once '../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

require './helpers/helpers.php';

if (isset($_POST["signup"])) {
  if (signup($_POST) > 0) {
    echo "
      <script>
        alert('Sign up success!');
        document.location.href = './login.php';
      </script>
    ";
  } else {
    echo mysqli_error($conn);
  }
}

require './views/signup.view.php';
