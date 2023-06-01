<?php
$title = 'News / ';

require './views/partials/header.php';
require './views/partials/navbar.php';
?>

<main class="max-w-7xl m-auto p-4">
  <div class="flex flex-col mb-12 gap-4">
    <div class="grid w-full grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-3 md:gap-3 lg:grid-cols-4">
      <div class="group">
        <a class="flex flex-col gap-2" href="#">
          <div class="rounded-xl overflow-clip aspect-video object-cover">
            <img class="group-hover:scale-110 transition duration-200 w-full h-full" src="./images/thmb.jpg" alt="banner">
          </div>
          <div class="text-sm">
            <span>Games</span>
            <span class="text-white/50">23/03/2023</span>
          </div>
          <h1 class="line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, nemo.</h1>
        </a>
      </div>
      <div class="group">
        <a class="flex flex-col gap-2" href="#">
          <div class="rounded-xl overflow-clip aspect-video object-cover">
            <img class="group-hover:scale-110 transition duration-200 w-full h-full" src="./images/yaoyao.jpg" alt="banner">
          </div>
          <div class="text-sm">
            <span>Games</span>
            <span class="text-white/50">23/03/2023</span>
          </div>
          <h1 class="line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, nemo.</h1>
        </a>
      </div>
      <div class="group">
        <a class="flex flex-col gap-2" href="#">
          <div class="rounded-xl overflow-clip aspect-video object-cover">
            <img class="group-hover:scale-110 transition duration-200 w-full h-full" src="./images/thmb.jpg" alt="banner">
          </div>
          <div class="text-sm">
            <span>Games</span>
            <span class="text-white/50">23/03/2023</span>
          </div>
          <h1 class="line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, nemo.</h1>
        </a>
      </div>
      <div class="group">
        <a class="flex flex-col gap-2" href="#">
          <div class="rounded-xl overflow-clip aspect-video object-cover">
            <img class="group-hover:scale-110 transition duration-200 w-full h-full" src="./images/yaoyao.jpg" alt="banner">
          </div>
          <div class="text-sm">
            <span>Games</span>
            <span class="text-white/50">23/03/2023</span>
          </div>
          <h1 class="line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, nemo.</h1>
        </a>
      </div>
    </div>
</main>

<?php
require './views/partials/footer.php';
?>