@extends('layouts.main')

@section('content')



<div class="max-w-2xl mx-auto my-8 bg-white rounded-lg shadow-md">
    <!-- Header Image with Border -->
    <div class="relative border-4 border-white rounded-t-lg">
        @if($post->gambar)
            <img src="{{ Storage::url($post->gambar) }}" alt="Gambar Proyek" class="w-full h-auto rounded-t-lg border-4 border-white">
        @else
            <img src="https://via.placeholder.com/600x300" alt="Default Image" class="w-full h-auto rounded-t-lg border-4 border-gray-300">
        @endif

        <!-- Deadline at top right -->
        @if($post->deadline)
            @php
                $deadline = \Carbon\Carbon::parse($post->deadline);
                $today = \Carbon\Carbon::now();
                $daysRemaining = $deadline->diffInDays($today);
                $isOver = $deadline->isPast();
            @endphp
            <div class="absolute top-0 right-0 mt-4 mr-4 bg-gray-100 p-2 rounded-lg">
                @if($isOver)
                    <span class="text-red-600">Sudah berakhir</span>
                    @else
                    <span class="text-green-600">{{ abs((int)$daysRemaining) }} Hari lagi</span>
                @endif
            </div>
        @endif
    </div>

    <!-- Campaign Info -->
    <div class="p-4">
        <h1 class="text-xl font-bold text-gray-800">{{ $post->judul }}</h1>
        <br>

        <!-- Informasi Penggalangan Dana -->
        <h2 class="text-lg font-semibold text-gray-800 mt-2">Informasi Penggalangan Dana : </h2>

        <p class="text-gray-600 mt-2">{{ $post->deskripsi }}</p>

        <div class="mt-4">
            <h3 class="text-lg font-semibold text-gray-800"> Kategori: </h3>
            <h4 class="text-lg font-semibold text-gray-700">{{ $post->kategori }}</h4>
        </div>

        <!-- Status -->
        <div class="mt-4 flex justify-between items-center">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span class="ml-2 text-gray-700">
                    @if($isOver)
                        Selesai
                    @else
                        Berlangsung
                    @endif
                </span>
            </div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                </svg>
                <span class="ml-2 text-gray-700">{{ $post->lokasi }}</span>
            </div>
        </div>

        <!-- External Link -->
        <div class="mt-4">
            <p><strong>Link: </strong>
            <a href="{{ $post->link }}" target="_blank" class="text-blue-500 break-all">{{ $post->link }}</a>
            </p>
        </div>

        <!-- Action Buttons -->
        <div class="mt-6 flex justify-between items-center">
            <!-- Bagikan - Auto Copy Link -->
            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded-lg flex items-center hover:bg-blue-600" onclick="copyToClipboard('{{ $post->link }}')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
                </svg>
                Bagikan
            </button>

            <!-- Donasi Sekarang -->
            <a href="{{ $post->link }}" target="_blank">
                <button class="bg-pink-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-pink-600 transition duration-110">
                    Donasi sekarang
                </button>
            </a>
        </div>
    </div>
</div>

<!-- Script for auto-copying link -->
<script>
    function copyToClipboard(link) {
        navigator.clipboard.writeText(link).then(function() {
            alert('Link copied to clipboard');
        });
    }
</script>
@endsection
