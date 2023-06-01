<?php
$title = 'Home / ';

require './views/partials/header.php';
require './views/partials/navbar.php';
?>


<main class="max-w-7xl m-auto p-4">
  <div class="group relative aspect-[3/4] rounded-3xl overflow-clip sm:aspect-video">
    <a href="#">
      <img src="./images/banner.jpeg" alt="banner" class="h-full w-full
        object-cover group-hover:scale-110 transition duration-200">
      <div class="absolute z-10 bottom-0 left-0 bg-gradient-to-t from-gray-800 w-full h-full"></div>
      <div class="absolute z-10 bottom-0 left-0 p-4 sm:p-8 max-w-4xl">
        <h1 class="text-2xl font-bold line-clamp-1 sm:text-4xl">Genshin Impact 3.5 has released</h1>
        <p class="line-clamp-2 sm:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ipsa voluptatem aperiam perspiciatis maiores, placeat atque nostrum culpa accusamus possimus animi sunt nam ducimus repellat quaerat, dolorum totam reprehenderit labore?</p>
      </div>
    </a>
  </div>

  <div class="mt-8 flex flex-col mb-12 gap-4">
    <h2 class="font-bold text-xl">Latest News</h2>
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
