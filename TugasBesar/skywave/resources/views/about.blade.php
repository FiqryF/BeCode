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
                  <div class="flex flex-1 items-center justify-end md:justify-between">
                    <nav aria-label="Global" class="hidden md:block">
                      <ul class="flex items-center gap-6 text-sm">
                        <li>
                          <a class="text-gray-500 transition hover:text-gray-500/75" href="/homelogin">Home</a>
                        </li>

                        <li>
                          <a class="text-gray-500 transition hover:text-gray-500/75" href="/pegawai">Product</a>
                        </li>

                        <li>
                          <a class="text-gray-500 transition hover:text-gray-500/75" href="/about"> About </a>
                        </li>
              
                        <li>
                          <form action="/logout" method="post">
                          @csrf
                         <button class="text-gray-500 transition hover:text-gray-500/75" type="submit">Logout</button>
                         </form> 
                        </li>
                      </ul>
                    </nav>
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

      <p class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-2xl">
        ABOUT
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

        <!--About-->
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8 mt-4">

            <article class="flex bg-white transition hover:shadow-xl">
              <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                <time
                  datetime="2024-01-01"
                  class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900"
                >
                  <span>2024</span>
                  <span class="w-px flex-1 bg-gray-900/10"></span>
                  <span>Jan 01</span>
                </time>
              </div>
            
              <div class="flex flex-1 flex-col justify-between">
                <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                  <a href="#">
                    <h3 class="font-bold uppercase text-gray-900">
                      Tentang skywave
                    </h3>
                  </a>
            
                  <p class="mt-2 line-clamp-10 text-sm/relaxed text-gray-700">
                    SKYWAVE adalah toko online yang berdedikasi untuk menyediakan perlengkapan PC berkualitas tinggi bagi para gamer, 
                    profesional kreatif, dan siapa saja yang membutuhkan teknologi terbaru 
                    untuk meningkatkan produktivitas dan hiburan mereka. Kami percaya 
                    bahwa setiap orang berhak mendapatkan performa terbaik dari komputer mereka, dan itulah sebabnya kami hanya menawarkan produk dari merek-merek terkemuka dan terpercaya.
                  </p>
            </article>

            <article class="flex bg-white transition hover:shadow-xl">
              <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                <time
                  datetime="2024-01-01"
                  class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900"
                >
                  <span>2024</span>
                  <span class="w-px flex-1 bg-gray-900/10"></span>
                  <span>Jan 01</span>
                </time>
              </div>
            
              <div class="flex flex-1 flex-col justify-between">
                <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                  <a href="#">
                    <h3 class="font-bold uppercase text-gray-900">
                      Visi dan Misi
                    </h3>
                  </a>
            
                  <p class="mt-2 line-clamp-10 text-sm/relaxed text-gray-700">
                    <p><strong>Visi:</strong> Menjadi perusahaan nomor 1 di industri penjualan perlengkapan pc dengan menyediakan produk dan layanan berkualitas tinggi yang memenuhi kebutuhan PC anda.</p>
                    <p><strong>Misi:</strong> Memberikan solusi terbaik dengan harga yang kompetitif, layanan pelanggan yang luar biasa, dan inovasi yang berkelanjutan untuk mendukung kemajuan dunia digital.</p>
                  </p>
                </div>
              </div>
            </article>

            <article class="flex bg-white transition hover:shadow-xl">
              <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                <time
                  datetime="2024-01-01"
                  class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900"
                >
                  <span>2024</span>
                  <span class="w-px flex-1 bg-gray-900/10"></span>
                  <span>Jan 01</span>
                </time>
              </div>
            
              <div class="flex flex-1 flex-col justify-between">
                <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                  <a href="#">
                    <h3 class="font-bold uppercase text-gray-900">
                      Introduction
                    </h3>
                  </a>
            
                  <p class="mt-2 line-clamp-10 text-sm/relaxed text-gray-700">
                    Saya Fiqry Firmansyah dan Rendra Aditya, mahasiswa Universitas Logistik & Bisnis Internasional Prodi D4 Teknik Informatika. 
                    Website ini adalah bagian dari tugas besar, kami membuat sebuah website Online Shop yang berfokus pada penjualan perlengkapan PC.
                    Tujuan kami adalah menyediakan produk-produk teknologi terbaik dengan harga kompetitif dan pelayanan pelanggan yang prima. 
                    Kami berkomitmen untuk memberikan pengalaman belanja yang memuaskan dengan menyediakan produk berkualitas tinggi dari merek-merek terkemuka.
                  </p>
            </article>

            <article class="flex bg-white transition hover:shadow-xl">
              <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                <time
                  datetime="2024-01-01"
                  class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900"
                >
                  <span>2024</span>
                  <span class="w-px flex-1 bg-gray-900/10"></span>
                  <span>Jan 01</span>
                </time>
              </div>
            
              <div class="flex flex-1 flex-col justify-between">
                <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                  <a href="#">
                    <h3 class="font-bold uppercase text-gray-900">
                      Universitas logistik & bisnis Internasional
                    </h3>
                  </a>
            
                  <p class="mt-2 line-clamp-10 text-sm/relaxed text-gray-700">
                    Universitas Logistik dan Bisnis Internasional (ULBI) hasil merger dari Politeknik Pos Indonesia (POLTEKPOS) dan Sekolah Tinggi Manajemen Logistik Indonesia (STIMLOG) Berdasarkan Surat Keputusan Menteri Pendidikan, Kebudayaan, Riset,
                    dan Teknologi Republik Indonesia Nomor 334/E/O/2022 yang ditetapkan di Jakarta pada tanggal 24 Mei 2022. ULBI merupakan Perguruan Tinggi Pertama di Indonesia yang berfokus pada keilmuan bidang Logistik, Manajemen Rantai Pasok, E-Commerce, dan Bisnis.
                  </p>
                  <div class="sm:flex sm:items-end sm:justify-end">
                    <a
                      href="https://www.ulbi.ac.id/"
                      class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400"
                    >
                      Site
                    </a>
                  </div>
            </article>
          </div>
        </div>
        <!--About-->

    <!-- footer -->
    <footer class="mt-4 lg:grid lg:grid-cols-5">
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
