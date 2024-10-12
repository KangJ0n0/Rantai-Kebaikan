@extends('layouts.main')


@section('content')


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


<section id="recommended-crowdfunding" class="py-16">
  <div class="container mx-auto text-center">
      <h2 class="text-2xl font-bold mb-6">Rekomendasi Penggalangan Dana</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
        @if($posts->isEmpty())
          <p class="text-center col-span-full">No posts found for the selected categories.</p>
        @else
          @foreach ($posts as $post)
          <a href="{{ route('post.show', $post->id) }}" class="block rounded-lg p-4 shadow-sm shadow-indigo-100 transition-transform transform hover:scale-105">
            <img
              alt="{{ $post->judul }}"
              src="{{ Storage::url($post->gambar) }}"
              class="h-56 w-full rounded-md object-cover"
            />
  
            <div class="mt-2">
              <dl>
                <div>
                  <dt class="sr-only">Deadline</dt>
                  <dd class="text-sm text-gray-500">
                    @if($post->deadline)
                      @php
                        $deadline = \Carbon\Carbon::parse($post->deadline);
                        $daysRemaining = $deadline->diffInDays(\Carbon\Carbon::now());
                        $isPastDeadline = \Carbon\Carbon::now()->greaterThan($deadline);
                      @endphp
                      @if($isPastDeadline)
                        Berakhir: {{ $deadline->format('d M Y') }}
                        @else
                        <span class="text-green-600">{{ abs((int)$daysRemaining) }} Hari lagi</span>
                    @endif
                    @else
                      No Deadline
                    @endif
                  </dd>
                </div>
  
                <div>
                  <dt class="sr-only">Judul</dt>
                  <dd class="font-medium">{{ $post->judul }}</dd>
                </div>
              </dl>
  
              <div class="mt-6 flex items-center gap-8 text-xs">
                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2 mr-auto">
                  <svg
                    class="size-4 text-indigo-700"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.5"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a10 10 0 00-10 10c0 5.25 10 14 10 14s10-8.75 10-14A10 10 0 0012 2z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 11.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z" />
                  </svg>
  
                  <div class="mt-1.5 sm:mt-0">
                    <p class="text-gray-500">Lokasi</p>
                    <p class="font-medium text-gray-700">{{ $post->lokasi }}</p>
                  </div>
                </div>
                <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                  <svg
                    class="size-4 text-indigo-700"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.5"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-4-4h-1m-6 6H4v-2a4 4 0 014-4h1m-3-4a4 4 0 118 0 4 4 0 01-8 0zm13 4a4 4 0 100-8 4 4 0 000 8z" />
                  </svg>
  
                  <div class="mt-1.5 sm:mt-0">
                    <p class="text-gray-500">Status</p>
                    @php
                      if (\Carbon\Carbon::now()->greaterThan($deadline)) {
                        $post->status = 'Selesai';
                      } else {
                        $post->status = 'Berlangsung';
                      }
                    @endphp
                    <p class="font-medium {{ $post->status == 'Berlangsung' ? 'text-green-500' : ($post->status == 'Selesai' ? 'text-red-500' : '') }}">
                      {{ $post->status }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </a>
          @endforeach
        @endif
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
        <dt class="order-last text-lg font-medium text-gray-500">Postingan</dt>
  
        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">20+</dd>
      </div>
  
      <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
        <dt class="order-last text-lg font-medium text-gray-500">Permintaan</dt>
  
        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">31</dd>
      </div>
  
      <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
        <dt class="order-last text-lg font-medium text-gray-500">Mitra</dt>
  
        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">6</dd>
      </div>
  
      <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
        <dt class="order-last text-lg font-medium text-gray-500">Total Kunjungan</dt>
  
        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">1.421</dd>
      </div>
    </dl>
  </div>


@endsection