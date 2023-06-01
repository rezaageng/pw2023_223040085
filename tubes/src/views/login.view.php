<?php
$title = 'Login / ';

require './views/partials/header.php';
?>

<main class="flex justify-center items-center w-full min-h-[100dvh] p-8">
  <div class="bg-gray-800 flex flex-col p-6 w-full sm:w-96 rounded-2xl gap-4 border border-gray-600">
    <h1 class="text-2xl text-center font-bold">Login</h1>
    <form action="" class="flex flex-col gap-4">
      <label for="username">Username</label>
      <input id="username" type="text" placeholder="your username" class="bg-gray-700 px-4 py-2 rounded-lg border border-gray-600">
      <label for="password">Password</label>
      <input id="password" type="password" placeholder="••••••••" class="bg-gray-700 px-4 py-2 rounded-lg border border-gray-600">
      <button class="bg-teal-600 px-4 py-2 rounded-lg">Login</button>
    </form>
    <span class="text-sm">Don&apos;t have an account yet? <a href="./signup.php" class="text-teal-600">Sign Up</a></span>
  </div>
</main>

<?php
require './views/partials/footer.php';
?>