<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>SKYWAVE Store</title>
</head>
<body>
             <!-- nav-->
             <header class="bg-white">
              <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                  <div class="flex-1 md:flex md:items-center md:gap-12">
                    <a class="block text-teal-600" href="#">
                      <span class="sr-only">Home</span>
                      <h2 class="text-2xl font-bold text-gray-900 md:text-2xl">
                        SKYWAVE
                      </h2>
                    </a>
                  </div>
            
                  <div class="md:flex md:items-center md:gap-12">
                    <nav aria-label="Global" class="hidden md:block">
                      <ul class="flex items-center gap-6 text-sm">
                        <li>
                          <a class="text-gray-500 transition hover:text-gray-500/75" href="Home.html"> Home </a>
                        </li>
            
                        <li>
                          <a class="text-gray-500 transition hover:text-gray-500/75" href="Product.html"> Product </a>
                        </li>
            
                        <li>
                          <a class="text-gray-500 transition hover:text-gray-500/75" href="/"> About </a>
                        </li>
                    </nav>
            
                    <div class="flex items-center gap-4">
                      <div class="sm:flex sm:gap-4">
                        <a
                          class="rounded-md bg-sky-500 px-5 py-2.5 text-sm font-medium text-white shadow"
                          href="/login"
                        >
                          Login
                        </a>
            
                        <div class="hidden sm:flex">
                          <a
                            class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600"
                            href="{{ url('/register') }}"
                          >
                            Register
                          </a>
                        </div>
                      </div>
            
                      <div class="block md:hidden">
                        <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="size-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                          >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </header>
            <!-- nav -->

                <!--Banner-->

<section class="overflow-hidden bg-gray-900 sm:grid sm:grid-cols-2 sm:items-center">
  <div class="p-8 md:p-12 lg:px-16 lg:py-24">
    <div class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
      <h2 class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-6xl">
        SKYWAVE
      </h2>

      <p class="hidden text-gray-500 md:mt-4 md:block">
        Upgrade your pc, upgrade your potential
      </p>

      <div class="mt-4 md:mt-8">
      </div>
    </div>
  </div>

  <img
    alt=""
    src="{{ asset('gambar/Banner.jpg') }}"
    class="h-full w-full object-cover sm:h-[calc(100%_-_2rem)] sm:self-end sm:rounded-ss-[30px] md:h-[calc(100%_-_4rem)] md:rounded-ss-[60px]"
  />
</section>
    <!--Banner-->

        <!--Product Best-->

        <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />

        <script type="module">
          import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'
        
          const keenSliderActive = document.getElementById('keen-slider-active')
          const keenSliderCount = document.getElementById('keen-slider-count')
        
          const keenSlider = new KeenSlider(
            '#keen-slider',
            {
              loop: true,
              defaultAnimation: {
                duration: 750,
              },
              slides: {
                origin: 'center',
                perView: 1,
                spacing: 16,
              },
              breakpoints: {
                '(min-width: 640px)': {
                  slides: {
                    origin: 'center',
                    perView: 1.5,
                    spacing: 16,
                  },
                },
                '(min-width: 768px)': {
                  slides: {
                    origin: 'center',
                    perView: 1.75,
                    spacing: 16,
                  },
                },
                '(min-width: 1024px)': {
                  slides: {
                    origin: 'center',
                    perView: 3,
                    spacing: 16,
                  },
                },
              },
              created(slider) {
                slider.slides[slider.track.details.rel].classList.remove('opacity-40')
        
                keenSliderActive.innerText = slider.track.details.rel + 1
                keenSliderCount.innerText = slider.slides.length
              },
              slideChanged(slider) {
                slider.slides.forEach((slide) => slide.classList.add('opacity-40'))
        
                slider.slides[slider.track.details.rel].classList.remove('opacity-40')
        
                keenSliderActive.innerText = slider.track.details.rel + 1
              },
            },
            []
          )
        
          const keenSliderPrevious = document.getElementById('keen-slider-previous')
          const keenSliderNext = document.getElementById('keen-slider-next')
        
          keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
          keenSliderNext.addEventListener('click', () => keenSlider.next())
        </script>
        
        <section class="bg-white">
          <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
            <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
              Best Seller
            </h2>
        
            <div class="mt-8">
              <div id="keen-slider" class="keen-slider">
                <div class="keen-slider__slide opacity-40 transition-opacity duration-500">
                  <blockquote class="">
                    <div class="flex items-center gap-4">
                      <li>
                        <a href="#" class="group block overflow-hidden">
                          <img
                            src="{{ asset('gambar/GX150.jpg') }}"
                            alt=""
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px]"
                          />
                
                          <div class="relative bg-white pt-3">
                            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                              GX150
                            </h3>
                
                            <p class="mt-2">
                              <span class="sr-only"> Regular Price </span>
                
                              <span class="tracking-wider text-gray-900"> Rp. 249.000 </span>
                            </p>
                          </div>
                        </a>
                      </li>
                  </blockquote>
                </div>
        
                <div class="keen-slider__slide opacity-40 transition-opacity duration-500">
                  <blockquote class="">
                    <div class="flex items-center gap-4">
                     
                      <li>
                        <a href="#" class="group block overflow-hidden">
                          <img
                            src="{{ asset('gambar/NYK HS-N07.jpg') }}"
                            alt=""
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px]"
                          />
                
                          <div class="relative bg-white pt-3">
                            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                              NYK HS-N07
                            </h3>
                
                            <p class="mt-2">
                              <span class="sr-only"> Regular Price </span>
                
                              <span class="tracking-wider text-gray-900"> Rp. 139.000 </span>
                            </p>
                          </div>
                        </a>
                      </li>
                  </blockquote>
                </div>
        
                <div class="keen-slider__slide opacity-40 transition-opacity duration-500">
                  <blockquote class="">
                    <div class="flex items-center gap-4">
                      <li>
                        <a href="#" class="group block overflow-hidden">
                          <img
                            src="{{ asset('gambar/MX key.png') }}"
                            alt=""
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px]"
                          />
                
                          <div class="relative bg-white pt-3">
                            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                              MX Key S
                            </h3>
                
                            <p class="mt-2">
                              <span class="sr-only"> Regular Price </span>
                
                              <span class="tracking-wider text-gray-900"> Rp. 2.249.000 </span>
                            </p>
                          </div>
                        </a>
                      </li>
                  </blockquote>
                </div>
        
                <div class="keen-slider__slide opacity-40 transition-opacity duration-500">
                  <blockquote class="">
                    <div class="flex items-center gap-4">
                      <li>
                        <a href="LocM1.html" class="group block overflow-hidden">
                          <img
                            src="{{ asset('gambar/pebble M350S.jpg') }}"
                            alt=""
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px]"
                          />
                
                          <div class="relative bg-white pt-3">
                            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                              Pebble M350S
                            </h3>
                
                            <p class="mt-2">
                              <span class="sr-only"> Regular Price </span>
                
                              <span class="tracking-wider text-gray-900"> Rp. 499.000 </span>
                            </p>
                          </div>
                        </a>
                      </li>
                  </blockquote>
                </div>
              </div>
        
              <div class="mt-6 flex items-center justify-center gap-4">
                <button
                  aria-label="Previous slide"
                  id="keen-slider-previous"
                  class="text-gray-600 transition-colors hover:text-gray-900"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-5"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                  </svg>
                </button>
        
                <p class="w-16 text-center text-sm text-gray-700">
                  <span id="keen-slider-active"></span>
                  /
                  <span id="keen-slider-count"></span>
                </p>
        
                <button
                  aria-label="Next slide"
                  id="keen-slider-next"
                  class="text-gray-600 transition-colors hover:text-gray-900"
                >
                  <svg
                    class="size-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9 5l7 7-7 7"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                    />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </section>
        <!--Product Best-->

        <!--Ads-->
        <section class="overflow-hidden rounded-lg md:grid md:grid-cols-3">
          <img
            alt=""
            src="{{ asset('gambar/ZH.jpg') }}"
            class="h-32 w-full object-cover md:h-full"
          />
        
          <div class="p-4 text-center sm:p-6 md:col-span-2 lg:p-8">
            <p class="text-sm font-semibold uppercase tracking-widest">Play your fave AAA games</p>
        
            <h2 class="mt-6 font-black uppercase">
              <span class="text-4xl font-black sm:text-5xl lg:text-6xl"> Get 20% off </span>
        
              <span class="mt-2 block text-sm"></span>
            </h2>
        
            <a
              class="mt-8 inline-block w-full bg-black py-4 text-sm font-bold uppercase tracking-widest text-white"
              href="RZ1.html"
            >
              Get Discount
            </a>
        
            <p class="mt-8 text-xs font-medium uppercase text-gray-400">
              Offer valid until 29th March, 2025 *
            </p>
          </div>
        </section>
        <!--Ads-->

        <!--product Section-->

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
          <div class="mt-4 rounded-lg bg-gray-200">
            <a href="MsiBlog.html" class="group relative block bg-black">
              <img
                alt=""
                src="{{ asset('gambar/Desktop.png') }}"
                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50"
              />
            
              <div class="relative p-4 sm:p-6 lg:p-8">
                <p class="text-sm font-bold uppercase tracking-widest text-pink-500">MSI</p>
            
                <p class="text-xl font-bold text-white sm:text-2xl">Desktop</p>
            
                <div class="mt-32 sm:mt-48 lg:mt-64">
                  <div
                    class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
                  >
                    <p class="text-sm text-white">
                      Temukan desktop MSI yang dirancang untuk memenuhi kebutuhan Anda, baik untuk gaming, produktivitas, maupun kreatifitas. 
                      Berikut adalah beberapa model terbaru dalam seri desktop MSI
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="mt-4 rounded-lg bg-gray-200">
            <a href="RogZ.html" class="group relative block bg-black">
              <img
                alt=""
                src="{{ asset('gambar/Laptop.jpg') }}"
                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50"
              />
            
              <div class="relative p-4 sm:p-6 lg:p-8">
                <p class="text-sm font-bold uppercase tracking-widest text-pink-500">Rog zephyrus</p>
            
                <p class="text-xl font-bold text-white sm:text-2xl">Laptop</p>
            
                <div class="mt-32 sm:mt-48 lg:mt-64">
                  <div
                    class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
                  >
                    <p class="text-sm text-white">
                      Temukan laptop gaming Zephyrus dari ASUS, dirancang untuk memberikan pengalaman gaming premium dan performa tinggi. 
                      Berikut adalah beberapa model terbaru dalam seri Zephyrus
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="mt-4 rounded-lg bg-gray-200">
            <a href="LogitechM.html" class="group relative block bg-black">
              <img
                alt=""
                src="{{ asset('gambar/Mouse.png') }}"
                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50"
              />
            
              <div class="relative p-4 sm:p-6 lg:p-8">
                <p class="text-sm font-bold uppercase tracking-widest text-pink-500">Logitech</p>
            
                <p class="text-xl font-bold text-white sm:text-2xl">Mouse</p>
            
                <div class="mt-32 sm:mt-48 lg:mt-64">
                  <div
                    class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
                  >
                    <p class="text-sm text-white">
                      Tingkatkan produktivitas Anda dengan mouse andalan dari Logitech , 
                      mouse yang dirancang untuk performa tinggi dan kenyamanan maksimal. Dilengkapi dengan fitur-fitur unggulan
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
          <div class="mt-4 rounded-lg bg-gray-200">
            <a href="LogitechW.html" class="group relative block bg-black">
              <img
                alt=""
                src="{{ asset('gambar/WebLogic.png') }}"
                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50"
              />
            
              <div class="relative p-4 sm:p-6 lg:p-8">
                <p class="text-sm font-bold uppercase tracking-widest text-pink-500">Logitech</p>
            
                <p class="text-xl font-bold text-white sm:text-2xl">Webcam</p>
            
                <div class="mt-32 sm:mt-48 lg:mt-64">
                  <div
                    class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
                  >
                    <p class="text-sm text-white">
                      Nikmati kualitas video yang tajam dan audio yang jernih dengan webcam Logitech, solusi ideal untuk berbagai kebutuhan komunikasi Anda, mulai dari rapat bisnis hingga panggilan video keluarga. 
                      Berikut adalah fitur-fitur unggulan yang ditawarkan
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="mt-4 rounded-lg bg-gray-200">
            <a href="RogS.html" class="group relative block bg-black">
              <img
                alt=""
                src="{{ asset('gambar/RogStrix.jpg') }}"
                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50"
              />
            
              <div class="relative p-4 sm:p-6 lg:p-8">
                <p class="text-sm font-bold uppercase tracking-widest text-pink-500">Rog Strix</p>
            
                <p class="text-xl font-bold text-white sm:text-2xl">Graphics cards</p>
            
                <div class="mt-32 sm:mt-48 lg:mt-64">
                  <div
                    class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
                  >
                    <p class="text-sm text-white">
                      Tingkatkan pengalaman gaming Anda dengan kartu grafis ROG Strix, yang dirancang untuk performa terbaik dan ketahanan yang tak tertandingi. 
                      Nikmati gameplay yang mulus dan visual yang memukau dengan fitur-fitur unggulan
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        
        <!--product section-->

    <!-- footer -->
    <footer class="bg-white lg:grid lg:grid-cols-5">
        <div class="relative block mt-4 lg:col-span-2 lg:h-full">
          <img
            src="{{ asset('gambar/Footer.png') }}"
            alt=""
            class="absolute inset-0 h-full w-full object-cover"
          />
        </div>
      
        <div class="px-4 py-16 sm:px-6 lg:col-span-3 lg:px-8">
          <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
            <div>
              <p>
                <span class="text-xs uppercase tracking-wide text-gray-500"> Call us </span>
      
                <a href="#" class="block text-2xl font-medium text-gray-900 hover:opacity-75 sm:text-3xl">
                  08112397778
                </a>
              </p>
      
              <ul class="mt-8 space-y-1 text-sm text-gray-700">
                <li>Monday to Friday: 10am - 5pm</li>
                <li>Weekend: 10am - 3pm</li>
              </ul>
      
              <ul class="mt-8 flex gap-6">
                <li>
                  <a
                    href="#"
                    rel="noreferrer"
                    target="_blank"
                    class="text-gray-700 transition hover:opacity-75"
                  >
                    <span class="sr-only">Facebook</span>
      
                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path
                        fill-rule="evenodd"
                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </a>
                </li>
      
                <li>
                  <a
                    href="#"
                    rel="noreferrer"
                    target="_blank"
                    class="text-gray-700 transition hover:opacity-75"
                  >
                    <span class="sr-only">Instagram</span>
      
                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path
                        fill-rule="evenodd"
                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </a>
                </li>
      
                <li>
                  <a
                    href="#"
                    rel="noreferrer"
                    target="_blank"
                    class="text-gray-700 transition hover:opacity-75"
                  >
                    <span class="sr-only">Twitter</span>
      
                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path
                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                      />
                    </svg>
                  </a>
                </li>
      
                <li>
                  <a
                    href="https://github.com/FiqryF/skywave.github.io.git"
                    rel="noreferrer"
                    target="_blank"
                    class="text-gray-700 transition hover:opacity-75"
                  >
                    <span class="sr-only">GitHub</span>
      
                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path
                        fill-rule="evenodd"
                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
      
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <div>
                <p class="font-medium text-gray-900">Credit</p>
      
                <ul class="mt-6 space-y-4 text-sm">
                  <li>
                    <a href="https://www.logitech.com/id-id" class="text-gray-700 transition hover:opacity-75"> Logitech </a>
                  </li>
      
                  <li>
                    <a href="https://rog.asus.com/id/" class="text-gray-700 transition hover:opacity-75"> ROG </a>
                  </li>
      
                  <li>
                    <a href="https://id.msi.com/" class="text-gray-700 transition hover:opacity-75"> MSI </a>
                  </li>
      
                  <li>
                    <a href="https://rexus.id/" class="text-gray-700 transition hover:opacity-75"> Rexus </a>
                  </li>
      
                  <li>
                    <a href="https://www.nyk.co.id/" class="text-gray-700 transition hover:opacity-75"> NYK Nemesis </a>
                  </li>
                </ul>
              </div>
      
              <div>
                <p class="font-medium text-gray-900">Company</p>
      
                <ul class="mt-6 space-y-4 text-sm">
                  <li>
                    <a href="About.html" class="text-gray-700 transition hover:opacity-75"> About </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      
          <div class="mt-12 border-t border-gray-100 pt-12">
            <div class="sm:flex sm:items-center sm:justify-between">
              <ul class="flex flex-wrap gap-4 text-xs">
                <li>
                  <a href="#" class="text-gray-500 transition hover:opacity-75"> Terms & Conditions </a>
                </li>
      
                <li>
                  <a href="#" class="text-gray-500 transition hover:opacity-75"> Privacy Policy </a>
                </li>
      
                <li>
                  <a href="#" class="text-gray-500 transition hover:opacity-75"> Cookies </a>
                </li>
              </ul>
      
              <p class="mt-8 text-xs text-gray-500 sm:mt-0">
                &copy; 2024. Company Name. All rights reserved.
              </p>
            </div>
          </div>
        </div>
      </footer>
    <!-- footer -->
</body>
</html>
