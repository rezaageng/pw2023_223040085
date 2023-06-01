<?php
require '../views/partials/admin/header.php';
require '../views/partials/admin/navbar.php';
?>

<main class="max-w-7xl m-auto p-4">
  <div class="mb-4 w-full flex justify-between items-center">
    <h1 class="text-xl font-bold">News</h1>
    <button onclick="document.location.href = './form.php'" class="bg-teal-600 rounded-xl px-4 py-2">Add</button>
  </div>
  <div class="flex flex-col w-full bg-gray-800 rounded-xl gap-4 overflow-clip">
    <div class="p-4">
      <h1 class="text-xl font-bold line-clamp-1">Wanderer</h1>
      <p class="line-clamp-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium ipsum error ipsam laborum voluptate similique odit est, soluta officia et distinctio laudantium enim ad dolor? Impedit delectus autem neque id, sunt magnam laborum minima eligendi quos odit dolorum pariatur iste labore beatae porro. Deserunt incidunt cum, illo eos adipisci ducimus rerum suscipit quae esse. Unde ipsam voluptates quia, quae perferendis illum in vitae asperiores dolorem suscipit modi corrupti adipisci eveniet dolores quidem debitis tenetur commodi nam odit animi sapiente quam optio est. Aperiam, harum labore libero nulla dolores quia incidunt quo, quae corporis soluta vel eligendi qui eius. Quisquam, eum?</p>
    </div>
    <div class="flex justify-around">
      <button class="bg-indigo-600 flex-1 p-2">Edit</button>
      <button class="bg-rose-600 flex-1 p-2">Delete</button>
    </div>
  </div>
</main>