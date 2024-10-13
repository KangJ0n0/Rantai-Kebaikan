

<footer class="bg-white">
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
      <div
        class="flex flex-col items-center gap-4 rounded-lg bg-indigo-600 p-6 shadow-lg sm:flex-row sm:justify-between"
      >
        <strong class="text-xl text-white sm:text-xl"> Kirimkan informasi penggalangan dana mu sekarang! </strong>
  
        <a
          class="inline-flex items-center gap-2 rounded-full border border-white bg-white px-8 py-3 text-indigo-600 hover:bg-gray-200 focus:outline-none focus:ring active:bg-white/90"
          href="{{ url('/request') }}"
        >
          <span class="text-sm font-medium"> Mulai </span>
  
          <svg
            class="size-5 rtl:rotate-180"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M17 8l4 4m0 0l-4 4m4-4H3"
            />
          </svg>
        </a>
      </div>

      <br><br>
  
     
  
      
          
      
          <div class="lg:flex lg:items-end lg:justify-between">
            <div>
              <div class="flex justify-center text-teal-800 lg:justify-start">
                <svg class="w-8 text-teal-accent-600" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                  <rect x="3" y="1" width="7" height="12"></rect>
                  <rect x="3" y="17" width="7" height="6"></rect>
                  <rect x="14" y="1" width="7" height="6"></rect>
                  <rect x="14" y="11" width="7" height="12"></rect>
              </svg>
              </div>
      
              <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-600 lg:text-left">
                Gerakkan Rantai Kebaikan, Ciptakan Perubahan Nyata. Setiap Tindakanmu Bermakna.
              </p>
            </div>
      
            <ul
              class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:mt-0 lg:justify-end lg:gap-12"
            >
                <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="{{ url('/informasi') }}"> FAQ </a>
                </li>
      
                <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="{{ url('/request') }}"> Service </a>
                </li>
      
                <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="{{ url('/galangdana') }}"> CrowdFunding </a>
                </li>
      
              <li>
                <a class="text-gray-700 transition hover:text-gray-700/75" href="{{ url('/informasi') }}"> Info </a>
              </li>
            </ul>
          </div>
      
          <p class="mt-12 text-center text-sm text-gray-500 lg:text-right">
            Copyright &copy; 2024. RantaiKebaikan.
          </p>
   
    </div>
  </footer>