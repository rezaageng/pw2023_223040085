<?php
$db_host = $_ENV['DB_HOST'];
$db_user = $_ENV['DB_USER'];
$db_pass = $_ENV['DB_PASS'];
$db_name = $_ENV['DB_NAME'];

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die;
}

function signup($data)
{
  global $conn;
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  if ($password !== $password2) {
    echo "
			<script>
				alert('Password is not match!');
			</script>
		";
    return false;
  }

  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "
			<script>
				alert('username is already exist!');
			</script>
		";
    return false;
  }


  $password = password_hash($password, PASSWORD_DEFAULT);
  mysqli_query($conn, "INSERT INTO user VALUES (null, '$username', '$password', null)");
  return mysqli_affected_rows($conn);
}
