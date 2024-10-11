@extends('layouts.main')

<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->
@section('content')

<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<section class="bg-gray-50" style="background-image: url('img/hero.png'); background-size: cover; background-position: center;">
  <div class="mx-auto max-w-screen-x1 px-4 py-32 lg:flex lg:h-screen lg:items-center ">
    <div class="mx-auto max-w-xl text-center">
      <h1 class="text-3xl font-extrabold text-white sm:text-5xl">
        Setiap rupiah, 
        <strong class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-300 to-green-400 sm:block">
          adalah kebaikan.
        </strong>
      </h1>

      <p class="mt-4 text-white sm:text-xl/relaxed">
        Temukan proyek lingkungan yang menginspirasi dan dukung mereka. Setiap kontribusi Anda sangat berarti bagi mereka.
      </p>

      <div class="mt-8 flex flex-wrap justify-center gap-4">
        <a
          class="inline-block rounded bg-green-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-green-700 focus:outline-none focus:ring active:bg-green-500"
          href="#"
        >
          Mulai
        </a>

      
      </div>
    </div>
  </div>
</section>


  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <div class="mx-auto max-w-3xl text-center">
      <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Berhubungan langsung dengan banyak Komunitas</h2>
  
      <p class="mt-4 text-gray-500 sm:text-xl">
        Dipercayai banyak komunitas sebagai mitra terpercaya dalam mewujudkan perubahan positif bagi lingkungan.
      </p>
    </div>
  
    <dl class="mt-6 grid grid-cols-1 gap-4 sm:mt-8 sm:grid-cols-2 lg:grid-cols-4">
      <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
        <dt class="order-last text-lg font-medium text-gray-500">Total Sales</dt>
  
        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">$4.8m</dd>
      </div>
  
      <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
        <dt class="order-last text-lg font-medium text-gray-500">Official Addons</dt>
  
        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">24</dd>
      </div>
  
      <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
        <dt class="order-last text-lg font-medium text-gray-500">Total Addons</dt>
  
        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">86</dd>
      </div>
  
      <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
        <dt class="order-last text-lg font-medium text-gray-500">Downloads</dt>
  
        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">86k</dd>
      </div>
    </dl>
  </div>


@endsection