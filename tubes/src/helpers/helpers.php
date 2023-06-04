<?php
$db_host = $_ENV['DB_HOST'];
$db_user = $_ENV['DB_USER'];
$db_pass = $_ENV['DB_PASS'];
$db_name = $_ENV['DB_NAME'];

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$userId = $_SESSION['id'] ?? null;

function dd($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die;
}

function signup($data)
{
  global $conn;
  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

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

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function createNews($data)
{
  global $conn;
  global $userId;

  $title = htmlspecialchars($data['title']);
  $content = htmlspecialchars($data['content']);
  $category = htmlspecialchars($data['category']);

  $image = uploadImage();
  if (!$image) {
    return false;
  }

  $query = "INSERT INTO news VALUES (null,'$title', '$content', '$image', '$category', NOW(), NOW(), '$userId')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function uploadImage()
{
  $imageName = $_FILES['image']['name'];
  $imageSize = $_FILES['image']['size'];
  $error = $_FILES['image']['error'];
  $tmpName = $_FILES['image']['tmp_name'];


  if ($error === 4) {
    echo "<script>alert('Insert an image!');</script>";
    return false;
  }


  if ($imageSize > 10000000 || $error === 1) {
    echo "<script>alert('Image is too big');</script>";
    return false;
  }

  if ($error !== 0) {
    echo "<script>alert('Failed to upload an image!');</script>";
    return false;
  }

  $validExtention = ['jpg', 'jpeg', 'png'];
  $imageExtention = explode('.', $imageName);
  $imageExtention = strtolower(end($imageExtention));
  if (!in_array($imageExtention, $validExtention)) {
    echo "<script>alert('Not an image!');</script>";
    return false;
  }



  $newImageName = uniqid();
  $newImageName .= '.';
  $newImageName .= $imageExtention;


  move_uploaded_file($tmpName, '../images/' . $newImageName);
  return $newImageName;
}

function deleteNews($id)
{
  global $conn;

  $news = query("SELECT * FROM news WHERE id = $id")[0];


  mysqli_query($conn, "DELETE FROM news WHERE id = $id");

  unlink('../images/' . $news['image']);

  return mysqli_affected_rows($conn);
}

function editNews($data)
{
  global $conn;

  // dd($data);

  $id = $data["id"];
  $title = htmlspecialchars($data['title']);
  $content = htmlspecialchars($data['content']);
  $category = htmlspecialchars($data['category']);
  $oldImage = htmlspecialchars($data['oldImage']);

  if ($_FILES['image']['error'] === 4) {
    $image = $oldImage;
  } else {
    $image = uploadImage();
  }

  $query = "UPDATE news SET title= '$title', content = '$content', category = '$category', image = '$image', updated_at = NOW() WHERE id = $id";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function comment($data)
{
  global $conn;
  global $userId;

  $comment = htmlspecialchars($data['comment']);
  $newsId = htmlspecialchars($data['newsId']);

  $query = "INSERT INTO comment VALUES (null, '$comment', NOW(), '$newsId')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
