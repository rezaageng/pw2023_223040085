<?php
$title = 'Sign Up / ';

require './views/partials/header.php';
?>

<main class="flex justify-center items-center w-full min-h-[100dvh] p-8">
  <div class="bg-gray-800 flex flex-col p-6 w-full sm:w-96 rounded-2xl gap-4 border border-gray-600">
    <h1 class="text-2xl text-center font-bold">Sign Up</h1>
    <form action="" method="post" class="flex flex-col gap-4">
      <label for="username">Username</label>
      <input name="username" id="username" type="text" placeholder="your username" class="bg-gray-700 px-4 py-2 rounded-lg border border-gray-600">
      <label for="password">Password</label>
      <input name="password" id="password" type="password" placeholder="••••••••" class="bg-gray-700 px-4 py-2 rounded-lg border border-gray-600">
      <label for="password">Repeat Password</label>
      <input name="password2" id="password" type="password" placeholder="••••••••" class="bg-gray-700 px-4 py-2 rounded-lg border border-gray-600">
      <button type="submit" class="mt-4 bg-teal-600 px-4 py-2 rounded-lg" name="signup">Sign Up</button>
    </form>
    <span class="text-sm">Already have an account? <a href="./login.php" class="text-teal-600">Login</a></span>
  </div>
</main>

<?php
require './views/partials/footer.php';
?>