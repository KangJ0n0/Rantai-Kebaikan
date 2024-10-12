@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4">

    <!-- Category Filter Form -->
 <!--
  Heads up! 👋
  Plugins:
    - @tailwindcss/forms
-->

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>
  [x-cloak] {
    display: none !important;
  }
</style>


<div class="flex justify-end gap-8 mt-8">

  <div class="relative">
   
    <div x-data="{ isOpen: false, selectedCategories: {{ json_encode(request('categories', [])) }} }">
      <button
        x-on:click="isOpen = !isOpen"
        type="button"
        class="flex cursor-pointer items-center gap-2 border-b border-green-400 pb-1 text-gray-900 transition hover:border-green-600"
      >
        <span class="text-sm font-medium"> Kategori </span>

        <span class="transition" :class="{ '-rotate-180': isOpen }">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-4"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </span>
      </button>

      <div
        x-cloak
        x-transition
        x-show="isOpen"
        x-on:click.away="isOpen = false"
        x-on:keydown.escape.window="isOpen = false"
        class="absolute right-0 top-auto z-50 mt-2"
      >
        <div class="w-96 rounded border border-gray-200 bg-white">
          <form method="GET" action="{{ route('galangdana') }}">
            <ul class="space-y-1 border-t border-gray-200 p-4">
              @php
                  $categories = [
                      'Sosial dan Kemasyarakatan',
                      'Kesehatan dan Kesejahteraan',
                      'Keagamaan',
                      'Teknologi Lingkungan',
                      'Edukasi dan Kesadaran Lingkungan',
                      'Konservasi Alam dan Keanekaragaman Hayati',
                  ];
              @endphp

              @foreach ($categories as $category)
                <li>
                  <label class="inline-flex items-center gap-2">
                    <input
                      type="checkbox"
                      name="categories[]"
                      value="{{ $category }}"
                      x-model="selectedCategories"
                      {{ in_array($category, request('categories', [])) ? 'checked' : '' }}
                      class="size-5 rounded border-gray-300"
                    />
                    <span class="text-sm font-medium text-gray-700">{{ $category }}</span>
                  </label>
                </li>
              @endforeach
            </ul>

            <button type="submit" class="w-full rounded bg-blue-600 py-2 px-4 text-white hover:bg-blue-700 transition mb-4">Filter</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Posts Grid -->
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
       <!-- Pagination Links -->
<div class="mt-6">
  {{ $posts->links() }} <!-- Laravel pagination links -->
</div>
    </div>
</div>
@endsection
