@extends('layouts.main')

@section('content')
<section>
<div class="max-w-screen-lg mx-auto px-2 py-4 space-y-8">
  <h2 class="sr-only">Steps</h2>
  
  <div
    class="relative after:absolute after:inset-x-0 after:top-1/2 after:block after:h-0.5 after:-translate-y-1/2 after:rounded-lg after:bg-black"
  >
    <ol class="relative z-10 flex justify-between text-sm font-medium text-black">
    <li class="flex items-center gap-2 bg-white p-2">
      <span class="size-6 rounded-full bg-green-200 text-center text-[10px]/6 font-bold text-white"> 1 </span>
  
      <span class="hidden sm:block"> Membuat Permintaan </span>
    </li>
  
    <li class="flex items-center gap-2 bg-white p-2">
      <span
      class="size-6 rounded-full bg-green-200 text-center text-[10px]/6 font-bold text-white"
      >
      2
      </span>
  
      <span class="hidden sm:block"> Validasi oleh Tim Website </span>
    </li>
  
    <li class="flex items-center gap-2 bg-white p-2">
      <span class="size-6 rounded-full bg-green-200 text-center text-[10px]/6 font-bold text-white"> 3 </span>
  
      <span class="hidden sm:block"> Publikasi Permintaan </span>
    </li>
    </ol>
  </div>
  </div>
  
  <!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->
<div class="max-w-screen-lg mx-auto px-2 py-4 space-y-8">

  <h2 class="sr-only">Steps</h2>
  
  <div>
    <ol
        class="grid grid-cols-1 divide-x divide-black overflow-hidden rounded-lg border border-black text-sm text-black sm:grid-cols-3"
    >
        <li class="flex items-center justify-center gap-2 p-4">
            <svg
                class="w-7 h-7 shrink-0 text-green-400"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"
                />
            </svg>

            <p class="leading-none">
                <strong class="block text-base font-medium"> Membuat Permintaan </strong>
                <small class="mt-1"> Mengirim permintaan yang berisi seperti jenis bantuan yang dibutuhkan, deskripsi proyek, target dana, dan informasi kontak. </small>
            </p>
        </li>

        <li class="relative flex items-center justify-center gap-2 p-4">
           
          

            <svg
                class="w-7 h-7 shrink-0 text-green-400"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                />
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                />
            </svg>

            <p class="leading-none">
                <strong class="block text-base font-medium"> Validasi oleh Tim Website </strong>
                <small class="mt-1"> Permintaan pengguna ditinjau oleh tim website, tim akan memverifikasi kebenaran data yang diberikan pengguna, seperti identitas, tujuan proyek, dan informasi kontak. </small>
            </p>
        </li>

        <li class="flex items-center justify-center gap-2 p-4">
            <svg
                class="w-7 h-7 shrink-0 text-green-400"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                />
            </svg>

            <p class="leading-none text-black">
                <strong class="block text-base font-medium text-black"> Publikasi Permintaan </strong>
                <small class="mt-1 text-black"> Jika permintaan disetujui, maka permintaan tersebut akan dipublikasikan di platform. </small>
            </p>
        </li>
    </ol>
</div>


  
  </div>
</section>
  <!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.

  Plugins:
    - @tailwindcss/forms
-->
<section>
  <div class="p-8 md:p-12 lg:px-16 lg:py-24">
    <div class="mx-auto max-w-lg text-center">
      <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
        Butuh bantuan?
      </h2>

      <p class="hidden text-gray-700 sm:mt-4 sm:block">
        Kami akan bantu kamu menyebarkan pesanmu agar dapat mengumpulkan dana yang dibutuhkan. Bersama kita bisa menciptakan dunia yang lebih baik
      </p>
    </div>

    <div class="mx-auto mt-8 max-w-xl">
      
        <div class="sm:flex-1">
          <a href="https://docs.google.com/forms/d/1yYHy86ul4D25eLQhxSdEEu0hTMwUDEBSOoKZGMNSKRg/viewform?edit_requested=true" 
          target="_blank"
          class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-green-800 px-5 py-3 text-white transition focus:outline-none focus:ring focus:ring-green-600 sm:mt-0 sm:w-auto mx-auto hover:bg-green-700 hover:scale-110">
          <span class="text-sm font-medium"> Buat Permintaan </span>
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
          Go to Form
       </a>
       
      
         
        </div>

     

         
          </svg>
        </button>
   
    </div>
  </div>
</section>

@endsection