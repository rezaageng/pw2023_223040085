<?php
require('./views/partials/header.php');
require('./views/partials/nav.php');
?>

<div class="container">
  <h1>Home Page</h1>
  <h3>Student List</h3>
  <?php
  foreach ($students as $student) :
  ?>
    <ul>
      <li>Name: <?= $student['name']; ?></li>
      <li>NPM: <?= $student['npm']; ?></li>
      <li>E-mail: <?= $student['email']; ?></li>
    </ul>
  <?php endforeach; ?>
</div>

<?php require('./views/partials/footer.php') ?>