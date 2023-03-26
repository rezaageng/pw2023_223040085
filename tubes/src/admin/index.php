<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medjed / Admin</title>
  <link rel="stylesheet" href="../css/output.css">
</head>

<body class="bg-gray-900 text-white">
  <nav class="static sm:sticky z-50 bg-gray-900/90 top-auto sm:top-0 sm:backdrop-blur-xl">
    <div class="max-w-7xl m-auto sm:flex items-center">
      <div class="p-4 text-2xl font-bold text-teal-600">
        <h1>Medjed</h1>
      </div>
      <div class="fixed bg-gray-900 sm:bg-transparent z-50 w-full bottom-0 left-0 border-t-[0.1px] border-t-white/50 sm:static sm:border-none">
        <ul class="flex justify-around p-4 sm:justify-end gap-8">
          <li>
            <a href="./index.php" class="flex gap-2 group">
              <svg xmlns="http://www.w3.org/2000/svg" class="fill-white group-hover:fill-teal-600" height="24" viewBox="0 96 960 960" width="24">
                <path d="M180 936q-24 0-42-18t-18-42V276q0-24 18-42t42-18h462l198 198v462q0 24-18 42t-42 18H180Zm0-60h600V447H639q-12.75 0-21.375-8.625T609 417V276H180v600Zm129-111h342q12.75 0 21.375-8.675 8.625-8.676 8.625-21.5 0-12.825-8.625-21.325T651 705H309q-12.75 0-21.375 8.675-8.625 8.676-8.625 21.5 0 12.825 8.625 21.325T309 765Zm0-318h141q12.75 0 21.375-8.675 8.625-8.676 8.625-21.5 0-12.825-8.625-21.325T450 387H309q-12.75 0-21.375 8.675-8.625 8.676-8.625 21.5 0 12.825 8.625 21.325T309 447Zm0 159h342q12.75 0 21.375-8.675 8.625-8.676 8.625-21.5 0-12.825-8.625-21.325T651 546H309q-12.75 0-21.375 8.675-8.625 8.676-8.625 21.5 0 12.825 8.625 21.325T309 606ZM180 276v171-171 600-600Z" />
              </svg>
              <span class="hidden sm:inline group-hover:text-teal-600">News</span>
            </a>
          </li>
          <li>
            <a href="./login.php" class="flex gap-2 group">
              <svg xmlns="http://www.w3.org/2000/svg" class="fill-white group-hover:fill-teal-600" height="24" viewBox="0 96 960 960" width="24">
                <path d="M222 801q63-44 125-67.5T480 710q71 0 133.5 23.5T739 801q44-54 62.5-109T820 576q0-145-97.5-242.5T480 236q-145 0-242.5 97.5T140 576q0 61 19 116t63 109Zm257.814-195Q422 606 382.5 566.314q-39.5-39.686-39.5-97.5t39.686-97.314q39.686-39.5 97.5-39.5t97.314 39.686q39.5 39.686 39.5 97.5T577.314 566.5q-39.686 39.5-97.5 39.5Zm.654 370Q398 976 325 944.5q-73-31.5-127.5-86t-86-127.266Q80 658.468 80 575.734T111.5 420.5q31.5-72.5 86-127t127.266-86q72.766-31.5 155.5-31.5T635.5 207.5q72.5 31.5 127 86t86 127.032q31.5 72.532 31.5 155T848.5 731q-31.5 73-86 127.5t-127.032 86q-72.532 31.5-155 31.5ZM480 916q55 0 107.5-16T691 844q-51-36-104-55t-107-19q-54 0-107 19t-104 55q51 40 103.5 56T480 916Zm0-370q34 0 55.5-21.5T557 469q0-34-21.5-55.5T480 392q-34 0-55.5 21.5T403 469q0 34 21.5 55.5T480 546Zm0-77Zm0 374Z" />
              </svg>
              <span class="hidden sm:inline group-hover:text-teal-600">Log Out</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

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

</body>

</html>