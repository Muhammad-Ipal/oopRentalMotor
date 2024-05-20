<section id="testimony">
  <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />

  <script type="module">
    import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

    const keenSlider = new KeenSlider(
      '#keen-slider', {
        loop: true,
        slides: {
          origin: 'center',
          perView: 1.25,
          spacing: 16,
        },
        breakpoints: {
          '(min-width: 1024px)': {
            slides: {
              origin: 'auto',
              perView: 2.5,
              spacing: 32,
            },
          },
        },
      },
      []
    )

    const keenSliderPrevious = document.getElementById('keen-slider-previous')
    const keenSliderNext = document.getElementById('keen-slider-next')

    keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
    keenSliderNext.addEventListener('click', () => keenSlider.next())

    let autoSlideInterval = setInterval(() => {
      keenSlider.next()
    }, 3000)

    keenSlider.on('mouseover', () => {
      clearInterval(autoSlideInterval)
    })

    keenSlider.on('mouseout', () => {
      autoSlideInterval = setInterval(() => {
        keenSlider.next()
      }, 3000)
    })
  </script>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="-mb-1">
    <path fill="#2a1c59" fill-opacity="1" d="M0,64L480,224L960,160L1440,160L1440,320L960,320L480,320L0,320Z"></path>
  </svg>
  <div class="bg-darkBlue">
    <div class="px-5 md:px-14 xl:px-24">
      <div class="max-w-7xl items-end justify-between sm:flex sm:pe-6 lg:pe-8">
        <h2 class="max-w-xl text-2xl font-bold tracking-tight text-white sm:text-4xl font-teko">
          customer review
        </h2>

        <div class="mt-8 flex gap-4 lg:mt-0">
          <button aria-label="Previous slide" id="keen-slider-previous" class="rounded-full border-2 border-purpleColor p-3 text-purpleColor transition hover:bg-purpleColor hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 rtl:rotate-180">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
          </button>

          <button aria-label="Next slide" id="keen-slider-next" class="rounded-full border-2 border-purpleColor p-3 text-purpleColor transition hover:bg-purpleColor hover:text-white">
            <svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
            </svg>
          </button>
        </div>
      </div>

      <div class="-mx-6 mt-8 lg:col-span-2 lg:mx-0">
        <div id="keen-slider" class="keen-slider ">
          <div class="keen-slider__slide">
            <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
              <div>
                <div class="flex gap-1 text-yellow-500">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>

                <div class="mt-4">
                  <p class="mt-4 leading-relaxed text-gray-700">
                    I am very happy with the experience of renting a motorbike here! The process is easy, the motorbike is in excellent condition, and the staff is very friendly. The rental price is affordable. What a recommendation for anyone who needs a reliable motorbike rental!
                  </p>
                </div>
              </div>

              <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                &mdash; Agoes De Jong
              </footer>
            </blockquote>
          </div>

          <div class="keen-slider__slide">
            <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
              <div>
                <div class="flex gap-1 text-yellow-500">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>

                <div class="mt-4">
                  <p class="mt-4 leading-relaxed text-gray-700">
                    The experience of renting a motorbike here is amazing! The process is fast and hassle-free, the motorbikes rented are in perfect condition, and the service from the staff is very satisfying. I will definitely come back to rent a motorbike here in the future!
                  </p>
                </div>
              </div>

              <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                &mdash; Muhammad Sumbul
              </footer>
            </blockquote>
          </div>

          <div class="keen-slider__slide">
            <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
              <div>
                <div class="flex gap-1 text-yellow-500">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>

                <div class="mt-4">
                  <p class="mt-4 leading-relaxed text-gray-700">
                    Using this motorbike rental service is really fun! The ordering process is easy, the motorbikes for rent are very well maintained, and the rental prices are also affordable. I am very satisfied with their service and will definitely recommend to friends!
                  </p>
                </div>
              </div>

              <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                &mdash; Patrick Schweinsteiger
              </footer>
            </blockquote>
          </div>

          <div class="keen-slider__slide">
            <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
              <div>
                <div class="flex gap-1 text-yellow-500">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>

                <div class="mt-4">
                  <p class="mt-4 leading-relaxed text-gray-700">
                    When I was in an emergency situation in an unfamiliar city, this rental not only provided a good motorbike, but also provided me with extraordinary warmth and attention. They are not just service providers, but seem to be friends in the midst of difficulties.
                  </p>
                </div>
              </div>

              <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                &mdash; Tjoetjoe Fir-A-Oen
              </footer>
            </blockquote>
          </div>

          <div class="keen-slider__slide">
            <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
              <div>
                <div class="flex gap-1 text-yellow-500">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>

                <div class="mt-4">
                  <p class="mt-4 leading-relaxed text-gray-700">
                    The experience of renting a motorbike at this rental is really fun! The process is very easy and fast, the motorbikes rented are in very good condition, and the service from the staff is extraordinarily friendly. I am very satisfied with their service and will definitely come back!
                  </p>
                </div>
              </div>

              <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                &mdash; Ambatukam von Hindenburg
              </footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#2a1c59" fill-opacity="1" d="M0,224L480,224L960,128L1440,192L1440,0L960,0L480,0L0,0Z"></path>
  </svg>
</section>