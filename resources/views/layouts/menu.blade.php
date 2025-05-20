<x-layout :title="$title">
    <!-- halaman Menu makanan berat -->
    <div class="pb-20 font-[Outfit]">
        <div class="px-20 py-10">
            <div class="flex justify-between">
                <h2 class="text-[#31515C] text-4xl font-bold sm:text-left sm:max-w-full">Menu <span
                        class="text-[#FFA800]">Makanan</span></h2>
            </div>
        </div>

        <div class="flex flex-wrap justify-start px-4 md:px-20 lg:px-[100px] gap-20">
            <!-- Menu Makanan Item -->
            <div
                class="group relative block overflow-hidden w-[200px] sm:w-[220px] md:w-[240px] lg:w-[260px] rounded-2xl shadow-md">
                <!-- Wishlist Button -->
                <button
                    class="absolute top-4 right-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                    <span class="sr-only">Wishlist</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="{{ asset('assets/image/Ayam Drakor.jpeg') }}" alt="Ayam Drakor"
                    class="h-56 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-64" />

                <!-- Product Information -->
                <div class="relative border border-gray-100 bg-white p-5">
                    <span class="bg-yellow-400 px-3 py-1.5 text-xs text-white font-medium whitespace-nowrap"> New
                    </span>

                    <!-- Product Title -->
                    <h3 class="mt-4 text-lg font-bold text-gray-900">Ayam Drakor</h3>

                    <!-- Product Price -->
                    <p class="mt-1.5 text-md font-medium text-gray-700">Rp
                        <span class="text-red-600">15.000</span>
                    </p>

                    <!-- Rating Section -->
                    {{-- {{-- <div class="flex items-center mt-2 text-yellow-400">
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons">star_border</span>
                    </div> --}} 

                    <!-- Add to Cart Button -->
                    <form class="mt-4">
                        <a href="{{ url('/detail') }}"
                            class="block w-full rounded-sm bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105 cursor-pointer text-white text-center">
                            Add to Cart
                        </a>
                    </form>
                </div>
            </div>

            <!-- Menu Makanan Item -->
            <div
                class="group relative block overflow-hidden w-[200px] sm:w-[220px] md:w-[240px] lg:w-[260px] rounded-2xl shadow-md">
                <!-- Wishlist Button -->
                <button
                    class="absolute top-4 right-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                    <span class="sr-only">Wishlist</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="{{ asset('assets/image/Ayam Drakor.jpeg') }}" alt="Ayam Drakor"
                    class="h-56 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-64" />

                <!-- Product Information -->
                <div class="relative border border-gray-100 bg-white p-5">
                    <span class="bg-yellow-400 px-3 py-1.5 text-xs text-white font-medium whitespace-nowrap"> New
                    </span>

                    <!-- Product Title -->
                    <h3 class="mt-4 text-lg font-bold text-gray-900">Ayam Drakor</h3>

                    <!-- Product Price -->
                    <p class="mt-1.5 text-md font-medium text-gray-700">Rp
                        <span class="text-red-600">15.000</span>
                    </p>

                    <!-- Rating Section -->
                    {{-- <div class="flex items-center mt-2 text-yellow-400">
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons">star_border</span>
                    </div> --}}

                    <!-- Add to Cart Button -->
                    <form class="mt-4">
                        <a href="{{ url('/detail') }}"
                            class="block w-full rounded-sm bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105 cursor-pointer text-white text-center">
                            Add to Cart
                        </a>
                    </form>
                </div>
            </div>

            <!-- Menu Makanan Item -->
            <div
                class="group relative block overflow-hidden w-[200px] sm:w-[220px] md:w-[240px] lg:w-[260px] rounded-2xl shadow-md">
                <!-- Wishlist Button -->
                <button
                    class="absolute top-4 right-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                    <span class="sr-only">Wishlist</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="{{ asset('assets/image/Ayam Drakor.jpeg') }}" alt="Ayam Drakor"
                    class="h-56 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-64" />

                <!-- Product Information -->
                <div class="relative border border-gray-100 bg-white p-5">
                    <span class="bg-yellow-400 px-3 py-1.5 text-xs text-white font-medium whitespace-nowrap"> New
                    </span>

                    <!-- Product Title -->
                    <h3 class="mt-4 text-lg font-bold text-gray-900">Ayam Drakor</h3>

                    <!-- Product Price -->
                    <p class="mt-1.5 text-md font-medium text-gray-700">Rp
                        <span class="text-red-600">15.000</span>
                    </p>

                    <!-- Rating Section -->
                    {{-- <div class="flex items-center mt-2 text-yellow-400">
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons">star_border</span>
                    </div> --}}

                    <!-- Add to Cart Button -->
                    <form class="mt-4">
                        <a href="{{ url('/detail') }}"
                            class="block w-full rounded-sm bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105 cursor-pointer text-white text-center">
                            Add to Cart
                        </a>
                    </form>
                </div>
            </div>

            <!-- Menu Makanan Item -->
            <div
                class="group relative block overflow-hidden w-[200px] sm:w-[220px] md:w-[240px] lg:w-[260px] rounded-2xl shadow-md">
                <!-- Wishlist Button -->
                <button
                    class="absolute top-4 right-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                    <span class="sr-only">Wishlist</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="{{ asset('assets/image/Ayam Drakor.jpeg') }}" alt="Ayam Drakor"
                    class="h-56 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-64" />

                <!-- Product Information -->
                <div class="relative border border-gray-100 bg-white p-5">
                    <span class="bg-yellow-400 px-3 py-1.5 text-xs text-white font-medium whitespace-nowrap"> New
                    </span>

                    <!-- Product Title -->
                    <h3 class="mt-4 text-lg font-bold text-gray-900">Ayam Drakor</h3>

                    <!-- Product Price -->
                    <p class="mt-1.5 text-md font-medium text-gray-700">Rp
                        <span class="text-red-600">15.000</span>
                    </p>

                    <!-- Rating Section -->
                    {{-- <div class="flex items-center mt-2 text-yellow-400">
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons">star_border</span>
                    </div> --}}

                    <!-- Add to Cart Button -->
                    <form class="mt-4">
                        <a href="{{ url('/detail') }}"
                            class="block w-full rounded-sm bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105 cursor-pointer text-white text-center">
                            Add to Cart
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- halaman Menu makanan berat -->

    <!-- halaman Menu makanan ringan -->
    <div class="pb-20 font-[Outfit]">
        <div class="px-20 py-10">
            <div class="flex justify-between">
                <h2 class="text-[#31515C] text-4xl font-bold sm:text-left sm:max-w-full">Menu <span
                        class="text-[#FFA800]">Cemilan</span></h2>
            </div>
        </div>

        <div class="flex flex-wrap justify-start px-4 md:px-20 lg:px-[100px] gap-20">
            <!-- Menu Minuman Item -->
            <div
                class="group relative block overflow-hidden w-[200px] sm:w-[220px] md:w-[240px] lg:w-[260px] rounded-2xl shadow-md">
                <!-- Wishlist Button -->
                <button
                    class="absolute top-4 right-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                    <span class="sr-only">Wishlist</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="{{ asset('assets/image/Salad L.jpg') }}" alt="Ayam Drakor"
                    class="h-56 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-64" />

                <!-- Product Information -->
                <div class="relative border border-gray-100 bg-white p-5">
                    <span class="bg-yellow-400 px-3 py-1.5 text-xs text-white font-medium whitespace-nowrap"> New
                    </span>

                    <!-- Product Title -->
                    <h3 class="mt-4 text-lg font-bold text-gray-900">Salad Buah</h3>

                    <!-- Product Price -->
                    <p class="mt-1.5 text-md font-medium text-gray-700">Rp
                        <span class="text-red-600">30.000</span>
                    </p>

                    <!-- Rating Section -->
                    {{-- <div class="flex items-center mt-2 text-yellow-400">
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons">star_border</span>
                    </div> --}}

                    <!-- Add to Cart Button -->
                    <form class="mt-4">
                        <a href="{{ url('/detail') }}"
                            class="block w-full rounded-sm bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105 cursor-pointer text-white text-center">
                            Add to Cart
                        </a>
                    </form>
                </div>
            </div>

            <!-- Menu Minuman Item -->
            <div
                class="group relative block overflow-hidden w-[200px] sm:w-[220px] md:w-[240px] lg:w-[260px] rounded-2xl shadow-md">
                <!-- Wishlist Button -->
                <button
                    class="absolute top-4 right-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                    <span class="sr-only">Wishlist</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="{{ asset('assets/image/Salad L.jpg') }}" alt="Ayam Drakor"
                    class="h-56 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-64" />

                <!-- Product Information -->
                <div class="relative border border-gray-100 bg-white p-5">
                    <span class="bg-yellow-400 px-3 py-1.5 text-xs text-white font-medium whitespace-nowrap"> New
                    </span>

                    <!-- Product Title -->
                    <h3 class="mt-4 text-lg font-bold text-gray-900">Salad Buah</h3>

                    <!-- Product Price -->
                    <p class="mt-1.5 text-md font-medium text-gray-700">Rp
                        <span class="text-red-600">30.000</span>
                    </p>

                    <!-- Rating Section -->
                    {{-- <div class="flex items-center mt-2 text-yellow-400">
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons">star_border</span>
                    </div> --}}

                    <!-- Add to Cart Button -->
                    <form class="mt-4">
                        <a href="{{ url('/detail') }}"
                            class="block w-full rounded-sm bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105 cursor-pointer text-white text-center">
                            Add to Cart
                        </a>
                    </form>
                </div>
            </div>

            <!-- Menu Minuman Item -->
            <div
                class="group relative block overflow-hidden w-[200px] sm:w-[220px] md:w-[240px] lg:w-[260px] rounded-2xl shadow-md">
                <!-- Wishlist Button -->
                <button
                    class="absolute top-4 right-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                    <span class="sr-only">Wishlist</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="{{ asset('assets/image/Salad L.jpg') }}" alt="Ayam Drakor"
                    class="h-56 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-64" />

                <!-- Product Information -->
                <div class="relative border border-gray-100 bg-white p-5">
                    <span class="bg-yellow-400 px-3 py-1.5 text-xs text-white font-medium whitespace-nowrap"> New
                    </span>

                    <!-- Product Title -->
                    <h3 class="mt-4 text-lg font-bold text-gray-900">Salad Buah</h3>

                    <!-- Product Price -->
                    <p class="mt-1.5 text-md font-medium text-gray-700">Rp
                        <span class="text-red-600">30.000</span>
                    </p>

                    <!-- Rating Section -->
                    {{-- <div class="flex items-center mt-2 text-yellow-400">
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons">star_border</span>
                    </div> --}}

                    <!-- Add to Cart Button -->
                    <form class="mt-4">
                        <a href="{{ url('/detail') }}"
                            class="block w-full rounded-sm bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105 cursor-pointer text-white text-center">
                            Add to Cart
                        </a>
                    </form>
                </div>
            </div>

            <!-- Menu Minuman Item -->
            <div
                class="group relative block overflow-hidden w-[200px] sm:w-[220px] md:w-[240px] lg:w-[260px] rounded-2xl shadow-md">
                <!-- Wishlist Button -->
                <button
                    class="absolute top-4 right-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                    <span class="sr-only">Wishlist</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="{{ asset('assets/image/Salad L.jpg') }}" alt="Ayam Drakor"
                    class="h-56 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-64" />

                <!-- Product Information -->
                <div class="relative border border-gray-100 bg-white p-5">
                    <span class="bg-yellow-400 px-3 py-1.5 text-xs text-white font-medium whitespace-nowrap"> New
                    </span>

                    <!-- Product Title -->
                    <h3 class="mt-4 text-lg font-bold text-gray-900">Salad Buah</h3>

                    <!-- Product Price -->
                    <p class="mt-1.5 text-md font-medium text-gray-700">Rp
                        <span class="text-red-600">30.000</span>
                    </p>

                    <!-- Rating Section -->
                    {{-- <div class="flex items-center mt-2 text-yellow-400">
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons">star_border</span>
                    </div> --}}

                    <!-- Add to Cart Button -->
                    <form class="mt-4">
                        <a href="{{ url('/detail') }}"
                            class="block w-full rounded-sm bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105 cursor-pointer text-white text-center">
                            Add to Cart
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- halaman Menu makanan ringan -->

    <!-- halaman Menu minuman -->
    <div class="pb-20 font-[Outfit]">
        <div class="px-20 py-10">
            <div class="flex justify-between">
                <h2 class="text-[#31515C] text-4xl font-bold sm:text-left sm:max-w-full">Menu <span
                        class="text-[#FFA800]">Minuman</span></h2>
            </div>
        </div>

        <div class="flex flex-wrap justify-start px-4 md:px-20 lg:px-[100px] gap-20">
            <!-- Menu Makanan Item -->
            <div
                class="group relative block overflow-hidden w-[200px] sm:w-[220px] md:w-[240px] lg:w-[260px] rounded-2xl shadow-md">
                <!-- Wishlist Button -->
                <button
                    class="absolute top-4 right-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                    <span class="sr-only">Wishlist</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="{{ asset('assets/image/Es Teller.jpg') }}" alt="Ayam Drakor"
                    class="h-56 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-64" />

                <!-- Product Information -->
                <div class="relative border border-gray-100 bg-white p-5">
                    <span class="bg-yellow-400 px-3 py-1.5 text-xs text-white font-medium whitespace-nowrap"> New
                    </span>

                    <!-- Product Title -->
                    <h3 class="mt-4 text-lg font-bold text-gray-900">Es Teller</h3>

                    <!-- Product Price -->
                    <p class="mt-1.5 text-md font-medium text-gray-700">Rp
                        <span class="text-red-600">10.000</span>
                    </p>

                    <!-- Rating Section -->
                    {{-- <div class="flex items-center mt-2 text-yellow-400">
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons">star_border</span>
                    </div> --}}

                    <!-- Add to Cart Button -->
                    <form class="mt-4">
                        <a href="{{ url('/detail') }}"
                            class="block w-full rounded-sm bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105 cursor-pointer text-white text-center">
                            Add to Cart
                        </a>
                    </form>
                </div>
            </div>

            <!-- Menu Makanan Item -->
            <div
                class="group relative block overflow-hidden w-[200px] sm:w-[220px] md:w-[240px] lg:w-[260px] rounded-2xl shadow-md">
                <!-- Wishlist Button -->
                <button
                    class="absolute top-4 right-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                    <span class="sr-only">Wishlist</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="{{ asset('assets/image/Es Teller.jpg') }}" alt="Ayam Drakor"
                    class="h-56 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-64" />

                <!-- Product Information -->
                <div class="relative border border-gray-100 bg-white p-5">
                    <span class="bg-yellow-400 px-3 py-1.5 text-xs text-white font-medium whitespace-nowrap"> New
                    </span>

                    <!-- Product Title -->
                    <h3 class="mt-4 text-lg font-bold text-gray-900">Es Teller</h3>

                    <!-- Product Price -->
                    <p class="mt-1.5 text-md font-medium text-gray-700">Rp
                        <span class="text-red-600">10.000</span>
                    </p>

                    <!-- Rating Section -->
                    {{-- <div class="flex items-center mt-2 text-yellow-400">
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons">star_border</span>
                    </div> --}}

                    <!-- Add to Cart Button -->
                    <form class="mt-4">
                        <a href="{{ url('/detail') }}"
                            class="block w-full rounded-sm bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105 cursor-pointer text-white text-center">
                            Add to Cart
                        </a>
                    </form>
                </div>
            </div>

            <!-- Menu Makanan Item -->
            <div
                class="group relative block overflow-hidden w-[200px] sm:w-[220px] md:w-[240px] lg:w-[260px] rounded-2xl shadow-md">
                <!-- Wishlist Button -->
                <button
                    class="absolute top-4 right-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                    <span class="sr-only">Wishlist</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="{{ asset('assets/image/Es Teller.jpg') }}" alt="Ayam Drakor"
                    class="h-56 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-64" />

                <!-- Product Information -->
                <div class="relative border border-gray-100 bg-white p-5">
                    <span class="bg-yellow-400 px-3 py-1.5 text-xs text-white font-medium whitespace-nowrap"> New
                    </span>

                    <!-- Product Title -->
                    <h3 class="mt-4 text-lg font-bold text-gray-900">Es Teller</h3>

                    <!-- Product Price -->
                    <p class="mt-1.5 text-md font-medium text-gray-700">Rp
                        <span class="text-red-600">10.000</span>
                    </p>

                    <!-- Rating Section -->
                    {{-- <div class="flex items-center mt-2 text-yellow-400">
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons">star_border</span>
                    </div> --}}

                    <!-- Add to Cart Button -->
                    <form class="mt-4">
                        <a href="{{ url('/detail') }}"
                            class="block w-full rounded-sm bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105 cursor-pointer text-white text-center">
                            Add to Cart
                        </a>
                    </form>
                </div>
            </div>

            <!-- Menu Makanan Item -->
            <div
                class="group relative block overflow-hidden w-[200px] sm:w-[220px] md:w-[240px] lg:w-[260px] rounded-2xl shadow-md">
                <!-- Wishlist Button -->
                <button
                    class="absolute top-4 right-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                    <span class="sr-only">Wishlist</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="{{ asset('assets/image/Es Teller.jpg') }}" alt="Ayam Drakor"
                    class="h-56 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-64" />

                <!-- Product Information -->
                <div class="relative border border-gray-100 bg-white p-5">
                    <span class="bg-yellow-400 px-3 py-1.5 text-xs text-white font-medium whitespace-nowrap"> New
                    </span>

                    <!-- Product Title -->
                    <h3 class="mt-4 text-lg font-bold text-gray-900">Es Teller</h3>

                    <!-- Product Price -->
                    <p class="mt-1.5 text-md font-medium text-gray-700">Rp
                        <span class="text-red-600">10.000</span>
                    </p>

                    <!-- Rating Section -->
                    {{-- <div class="flex items-center mt-2 text-yellow-400">
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons mr-1">star</span>
                        <span class="material-icons">star_border</span>
                    </div> --}}

                    <!-- Add to Cart Button -->
                    <form class="mt-4">
                        <a href="{{ url('/detail') }}"
                            class="block w-full rounded-sm bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105 cursor-pointer text-white text-center">
                            Add to Cart
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- halaman Menu minuman -->
</x-layout>
