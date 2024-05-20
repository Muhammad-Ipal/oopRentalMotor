<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rental Motor</title>
  <link rel="stylesheet" href="./public/css/output.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap');
  </style>
</head>

<?php
echo "<script>alertMessage('Konformasi password salah');</script>";
?>

<body class="font-urbanist md:h-dvh">

  <header class="h-[60px] flex items-center sm:px-20 px-10 justify-between">
    <div class="text-blackColor md:text-2xl uppercase font-bold">harmony<span class="text-purpleColor">rent</span></div>

    <button>
      <a href="./public/page/login/" class="text-white sm:px-6 py-2 px-4 rounded-full bg-purpleColor font-semibold hover:bg-purple-500 sm:text-base text-sm">Join Membership</a>
    </button>
  </header>


  <main>
    <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 -z-10">
      <div class="blur-[106px] h-48 bg-gradient-to-br from-purpleColor to-purple-400"></div>
      <div class="blur-[106px] h-24 bg-gradient-to-r from-cyan-400 to-sky-300"></div>
    </div>

    <div class="flex justify-center">
      <div class="max-w-4xl tracking-widest px-6 pt-20">
        <h1 class="font-bold text-2xl md:text-6xl xl:text-7xl text-blackColor text-center">Explore your world with <span class="text-purpleColor">harmony</span></h1>

        <p class="mt-8 text-slate-700 text-center sm:text-base text-sm">With us, explore new adventures and create unforgettable memories. We offer unique experiences that open the door to a world of possibilities. Join us on a journey you'll never forget.</p>

        <div class="flex gap-x-6 justify-center  mt-16">
          <button>
            <a href="./public/page/login/" class="text-white sm:px-6 py-2 px-4 rounded-full bg-purpleColor font-semibold hover:bg-purple-500 sm:text-base text-sm">Join Membership</a>
          </button>

          <button>
            <a href="./public/page/home/" class="text-purpleColor sm:px-6 py-2 px-4 text-sm sm:text-base rounded-full bg-purple-100 font-semibold ring-1 ring-purple-200">Rent Now</a>
          </button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 py-8 mt-16 border-y border-gray-200">
          <div class="text-left">
            <h6 class="text-lg font-semibold text-gray-700">High-Quality</h6>
            <p class="mt-2 text-gray-500">Offering well-maintained</p>
          </div>
          <div class="text-left">
            <h6 class="text-lg font-semibold text-gray-700">Excellent cs</h6>
            <p class="mt-2 text-gray-500">Providing responsive and friendly cs</p>
          </div>
          <div class="text-left">
            <h6 class="text-lg font-semibold text-gray-700">Easy Booking Process</h6>
            <p class="mt-2 text-gray-500">Featuring a simple and fast booking process</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-12 grid grid-cols-3  md:grid-cols-5 sm:max-w-6xl mx-auto pb-10 ">
      <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
        <img src="./public/assets/client/yamaha.svg" class="h-8  mx-auto" loading="lazy" alt="client logo" width="" height="">
      </div>
      <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
        <img src="./public/assets/client/honda.png" class="h-8 mx-auto" loading="lazy" alt="client logo" width="" height="">
      </div>
      <div class="p-4 flex grayscale transition duration-200 hover:grayscale-0">
        <img src="./public/assets/client/suzuki.png" class="h-8  mx-auto" loading="lazy" alt="client logo" width="" height="">
      </div>
      <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
        <img src="./public/assets/client/kawasaki-logo.svg" class="h-8  mx-auto" loading="lazy" alt="client logo" width="" height="">
      </div>
      <div class="p-4 flex grayscale transition duration-200 hover:grayscale-0">
        <img src="./public/assets/client/ktm.svg" class="h-8  mx-auto" loading="lazy" alt="client logo" width="" height="">
      </div>
    </div>
  </main>
</body>

</html>