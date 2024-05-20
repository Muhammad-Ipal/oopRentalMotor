  <nav class="flex sm:px-20 px-5 justify-between py-2.5">
    <a href="../../../">
      <div class="text-blackColor text-xl  md:text-2xl uppercase font-bold flex items-center">h<span class="hidden sm:block">armony</span>
        <span class="text-purpleColor">rent</span>
      </div>
    </a>

    <div class="flex items-center">
      <div class="hidden lg:block">
        <ul class="flex items-center space-x-7 text-slate-500">
          <li class="hover:text-slate-800"><a href="#home">Home</a></li>
          <li class="hover:text-slate-800"><a href="#about">About us</a></li>
          <li class="hover:text-slate-800"><a href="#service">Service</a></li>
          <li class="hover:text-slate-800"><a href="#rent">Rent</a></li>
          <li class="hover:text-slate-800"><a href="#testimony">Testimony</a></li>
          <li class="hover:text-slate-800"><a href="#blog">Blog</a></li>
          <li class="hover:text-slate-800"><a href="#contact">Contact</a></li>
        </ul>
      </div>

      <div class="relative text-base lg:hidden" id="dropdown">
        <button id="dropdown-button" class="flex items-center text-base px-4 py-2 sm:font-medium bg-gray-100 rounded-l-full rounded-r-full text-slate-600">
          <span>Home</span>
          <svg id="dropdown-icon" class="w-4 h-4 ml-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15 9l-1.414-1.414L10 10.586 7.05 7.636 5.636 9z" />
          </svg>
        </button>
        <div id="dropdown-content" class="absolute text-sm sm:text-base left-1/2 -translate-x-1/2 w-48 p-3 bg-white rounded-lg shadow-sm text-slate-500 top-14 ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu" style="display: none;">
          <a href="#home" class="block px-4 py-3 rounded-lg hover:text-slate-900 hover:bg-gray-100" role="menuitem"><i class="mr-3 bi bi-house"></i>Home</a>
          <a href="#about" class="block px-4 py-3 rounded-lg hover:text-slate-900 hover:bg-gray-100" role="menuitem"><i class="mr-3 bi bi-info-circle"></i>About us</a>
          <a href="#service" class="block px-4 py-3 rounded-lg hover:text-slate-900 hover:bg-gray-100" role="menuitem"><i class="mr-3 bi bi-wrench"></i>Service</a>
          <a href="#rent" class="block px-4 py-3 rounded-lg hover:text-slate-900 hover:bg-gray-100" role="menuitem"><i class="mr-3 bi bi-pin"></i>Rent</a>
          <a href="#testimony" class="block px-4 py-3 rounded-lg hover:text-slate-900 hover:bg-gray-100" role="menuitem"><i class="mr-3 bi bi-chat-left-text"></i>Testimony</a>
          <a href="#blog" class="block px-4 py-3 rounded-lg hover:text-slate-900 hover:bg-gray-100" role="menuitem"><i class="mr-3 bi bi-bookmark"></i>Blog</a>
          <a href="#contact" class="block px-4 py-3 rounded-lg hover:text-slate-900 hover:bg-gray-100" role="menuitem"><i class="mr-3 bi bi-telephone"></i>Contact Us</a>
        </div>
      </div>

      <?php if (isset($_SESSION['login'])) : ?>
        <div class="flex ml-5">
          <span class=" flex items-center text-white sm:px-6 sm:py-2 px-4 py-1 rounded-full bg-purpleColor font-semibold hover:bg-purple-500 text-sm sm:text-base ">
            <i class="bi bi-person mr-3"></i> <?= $_SESSION['username'] ?>
          </span>

          <span class="flex items-center">
            <a href="../../.././index.php" class="bg-purpleColor w-10 h-10 rounded-full inline-flex items-center justify-center text-white text-lg ml-3"><i class="bi bi-box-arrow-in-right -ml-1"></i></a>
          </span>
        </div>
      <?php else : ?>
        <button>
          <a href="../../../public/page/login/" class="text-white sm:px-6 py-2 px-4 rounded-full bg-purpleColor font-semibold hover:bg-purple-500 sm:text-base text-sm ml-7">Join Membership</a>
        </button>
      <?php endif; ?>
    </div>
  </nav>