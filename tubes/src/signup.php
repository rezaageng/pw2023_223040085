<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medjed</title>
  <link rel="stylesheet" href="css/output.css">
</head>

<body class="bg-gray-900 text-white">

  <main class="flex justify-center items-center w-full min-h-[100dvh] p-8">
    <div class="bg-gray-800 flex flex-col p-6 w-full sm:w-96 rounded-2xl gap-4 border border-gray-600">
      <h1 class="text-2xl text-center font-bold">Sign Up</h1>
      <form action="" class="flex flex-col gap-4">
        <label for="username">Username</label>
        <input id="username" type="text" placeholder="your username" class="bg-gray-700 px-4 py-2 rounded-lg border border-gray-600">
        <label for="password">Password</label>
        <input id="password" type="password" placeholder="••••••••" class="bg-gray-700 px-4 py-2 rounded-lg border border-gray-600">
        <label for="password">Repeat Password</label>
        <input id="password" type="password" placeholder="••••••••" class="bg-gray-700 px-4 py-2 rounded-lg border border-gray-600">
        <button class="bg-teal-600 px-4 py-2 rounded-lg">Sign Up</button>
      </form>
      <span class="text-sm">Already have an account? <a href="./login.php" class="text-teal-600">Login</a></span>
    </div>
  </main>

</body>

</html>