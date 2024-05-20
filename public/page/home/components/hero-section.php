<section id="home" class="flex justify-center mt-20">
  <div class="w-full">
    <div class="px-5" >
      <h1 class="font-teko font-extrabold text-blackColor text-4xl md:text-7xl xl:text-[84px] text-center">EXPLORE & DISCOVER</h1>
      <p class="max-w-2xl lg:text-lg mt-3.5 sm:mt-4 xl:mt-7 text-slate-700 text-center sm:text-base text-sm mb-10 mx-auto">Our motorcycle rentals are ready to change the way you explore the world. Start your adventure now! Experience the freedom of riding with us.</p>

      <button class="md:py-3.5 py-2 px-6 rounded-sm font-semibold md:px-10 bg-purpleColor hover:bg-purple-500 text-white mt-7 mx-auto block">
        <a href="#rent">Rent now</a>
      </button>
    </div>

    <div id="controls-carousel" class="relative w-full max-w-5xl mx-auto mt-5" data-carousel="static">
      <div class="relative h-72 overflow-hidden rounded-lg md:h-[500px]">
        <!-- Item 1 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
          <img src="../../assets/img/vesmetgray.png" class="absolute inset-0 h-full left-1/2 -translate-x-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
          <img src="../../assets/img/zx6.png" class="absolute inset-0 h-full left-1/2 -translate-x-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="../../assets/img/klx.png" class="absolute inset-0 h-full left-1/2 -translate-x-1/2" alt="...">
        </div>
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="../../assets/img/nmax.png" class="absolute inset-0 h-full left-1/2 -translate-x-1/2" alt="...">
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const carousel = document.getElementById("controls-carousel");
      const items = carousel.querySelectorAll("[data-carousel-item]");
      let currentItemIndex = 0;

      function showItem(index) {
        items.forEach((item, i) => {
          item.classList.toggle("hidden", i !== index);
        });
      }

      function showNextItem() {
        currentItemIndex = (currentItemIndex + 1) % items.length;
        showItem(currentItemIndex);
      }

      function showPrevItem() {
        currentItemIndex = (currentItemIndex - 1 + items.length) % items.length;
        showItem(currentItemIndex);
      }

      carousel
        .querySelector("[data-carousel-prev]")
        .addEventListener("click", showPrevItem);
      carousel
        .querySelector("[data-carousel-next]")
        .addEventListener("click", showNextItem);
    });
  </script>
</section>