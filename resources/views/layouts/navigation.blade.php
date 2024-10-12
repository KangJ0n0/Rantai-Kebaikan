

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

<nav class="bg-gray-800">
    <div class="bg-gray-900">
        <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="relative flex items-center justify-between">
                <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                    <svg class="w-8 text-teal-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                        <rect x="3" y="1" width="7" height="12"></rect>
                        <rect x="3" y="17" width="7" height="6"></rect>
                        <rect x="14" y="1" width="7" height="6"></rect>
                        <rect x="14" y="11" width="7" height="12"></rect>
                    </svg>
                    <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase">RK</span>
                </a>
                <ul class="flex items-center hidden space-x-8 lg:flex">
                    <li>
                        <a href="{{ url('/') }}" aria-label="Home" title="Home"
                           class="font-medium tracking-wide transition-colors duration-200 hover:text-teal-accent-400
                           {{ Request::is('/') ? 'text-green-500' : 'text-gray-100' }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/galangdana') }}" aria-label="Galang Dana" title="Galang Dana"
                           class="font-medium tracking-wide transition-colors duration-200 hover:text-teal-accent-400
                           {{ Request::is('galangdana') ? 'text-green-500' : 'text-gray-100' }}">
                            Galang Dana
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/request') }}" aria-label="Request" title="Request"
                           class="font-medium tracking-wide transition-colors duration-200 hover:text-teal-accent-400
                           {{ Request::is('request') ? 'text-green-500' : 'text-gray-100' }}">
                            Request
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/informasi') }}" aria-label="Informasi" title="Informasi"
                           class="font-medium tracking-wide transition-colors duration-200 hover:text-teal-accent-400
                           {{ Request::is('informasi') ? 'text-green-500' : 'text-gray-100' }}">
                            Informasi
                        </a>
                    </li>
                </ul>
                <ul class="flex items-center hidden space-x-8 lg:flex">
                    <li>
                        <form action="{{ route('galangdana') }}" method="GET" class="relative">
                            <input type="text" name="search"
                                   placeholder="Coba cari 'bantuan'"
                                   class="h-12 px-4 pr-10 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-teal-accent-400" />
                            <button type="submit" class="absolute top-0 right-0 mt-3 mr-4">
                                <svg class="w-4 h-4 text-gray-600 transition-transform duration-200 transform hover:scale-150" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m1.35-5.65a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </form>
                    </li>
                </ul>
                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button aria-label="Open Menu" title="Open Menu" class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline" id="mobile-menu-button">
                        <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                            <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
                            <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu dropdown -->
    <div class="lg:hidden" id="mobile-menu" style="display: none;">
        <ul class="px-4 py-5 space-y-4">
            <li>
                <a href="{{ url('/') }}" class="block transition-colors duration-200 hover:text-teal-accent-400
                   {{ Request::is('/') ? 'text-green-500' : 'text-gray-100' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ url('/galangdana') }}" class="block transition-colors duration-200 hover:text-teal-accent-400
                   {{ Request::is('galangdana') ? 'text-green-500' : 'text-gray-100' }}">
                    Galang Dana
                </a>
            </li>
            <li>
                <a href="{{ url('/request') }}" class="block transition-colors duration-200 hover:text-teal-accent-400
                   {{ Request::is('request') ? 'text-green-500' : 'text-gray-100' }}">
                    Request
                </a>
            </li>
            <li>
                <a href="{{ url('/informasi') }}" class="block transition-colors duration-200 hover:text-teal-accent-400
                   {{ Request::is('informasi') ? 'text-green-500' : 'text-gray-100' }}">
                    Informasi
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- JavaScript for toggling mobile menu -->
<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.style.display = mobileMenu.style.display === 'none' ? 'block' : 'none';
    });
</script>
