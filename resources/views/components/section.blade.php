<!-- hero -->
<section class="flex justify-center items-center py-30 gap-12 flex-wrap lg:flex-nowrap">
    <!-- Konten Teks -->
    <div class="max-w-xl">
        <h2 class="text-[#FFA800] text-xl font-semibold mb-4">SELAMAT DATANG</h2>
        <h1 class="text-4xl font-black text-[#31515C] leading-snug mb-4">
            Nikmati Kelezatan<br>
            <span class="text-[#FFA800]">Rumah Makan Amenk</span>
        </h1>
        <p class="text-gray-600 text-lg mb-6">
            Di mana Setiap Piring Menenun Kisah Penguasaan Kuliner dan Keahlian yang Penuh Semangat.
        </p>
        <a href="menu.php" class="bg-[#FFA800] hover:bg-[#31515C] text-white px-6 py-3 rounded-lg shadow text-lg">
            MENU KAMI
        </a>
    </div>

    <!-- Gambar -->
    <div class="shrink-0">
        <img src="{{ asset('logo.png') }}" alt="Hero Image"
            class="w-[550px] h-[550px] rounded-full border-[10px] border-[#FFA800] object-cover">
    </div>

</section>
<!-- hero -->

<!-- popular categories -->
<section class="text-center py-16">
    <h6 class="text-red-500 text-xl mb-2">CUSTOMER FAVORITES</h6>
    <h6 class="text-3xl font-black text-gray-800 mb-14">Katagori Populer</h6>
    <div class="flex justify-center gap-8 flex-wrap">
        <div
            class="bg-white cursor-pointer rounded-2xl shadow-lg p-6 w-56 text-center transition-transform hover:-translate-y-2">
            <img src="{{ asset('Ayam Drakor.jpeg') }}" alt="Menu Makanan"
                class="w-24 border-4 border-orange-400 h-24 mx-auto rounded-full mb-4">
            <h4 class="font-bold">Menu Makanan</h4>
            <p class="text-sm text-gray-500">(15 Tersedia)</p>
        </div>
        <div
            class="bg-white cursor-pointer rounded-2xl shadow-lg p-6 w-56 text-center transition-transform hover:-translate-y-2">
            <img src="{{ asset('Ayam Drakor.jpeg') }}" alt="Menu Minuman"
                class="w-24 h-24 border-4 border-orange-400 mx-auto rounded-full mb-4">
            <h4 class="font-bold">Menu Minuman</h4>
            <p class="text-sm text-gray-500">(7 Tersedia)</p>
        </div>
        <div
            class="bg-white cursor-pointer rounded-2xl shadow-lg p-6 w-56 text-center transition-transform hover:-translate-y-2">
            <img src="{{ asset('Ayam Drakor.jpeg') }}" alt="Menu Cemilan"
                class="w-24 h-24 border-4 border-orange-400 mx-auto rounded-full mb-4">
            <h4 class="font-bold">Menu Cemilan</h4>
            <p class="text-sm text-gray-500">(7 Tersedia)</p>
        </div>
        <div
            class="bg-white cursor-pointer rounded-2xl shadow-lg p-6 w-56 text-center transition-transform hover:-translate-y-2">
            <img src="{{ asset('Ayam Drakor.jpeg') }}" alt="Menu Cemilan"
                class="w-24 h-24 border-4 border-orange-400 mx-auto rounded-full mb-4">
            <h4 class="font-bold">Menu Cemilan</h4>
            <p class="text-sm text-gray-500">(7 Tersedia)</p>
        </div>
    </div>
</section>
<!-- popular categories -->

<section id="services" class=" py-48 px-4 lg:px-20">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-start justify-between gap-12">
        <!-- Kiri: Judul dan deskripsi -->
        <div class="max-w-xl pt-10">
            <p class="text-red-400 font-semibold mb-2">OUR STORY & SERVICES</p>
            <h2 class="text-4xl font-bold text-[#1E2D3B] mb-4 leading-snug">
                Layanan Rumah Makan<br>Amenk Kami
            </h2>
            <p class="text-gray-600 text-lg">
                Berakar pada semangat, kami menciptakan pengalaman bersantap yang tak terlupakan dan
                menawarkan layanan yang luar biasa, memadukan seni kuliner dengan keramahan yang hangat.
            </p>
        </div>

        <!-- Kanan: Kotak layanan -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 ">
            <!-- Item 1 -->
            <div
                class="group bg-white p-6 rounded-xl shadow-md text-center cursor-pointer hover:bg-orange-400 transition duration-300">
                <div class="text-4xl mb-4 group-hover:text-white transition duration-300">🍽️</div>
                <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-white transition duration-300">
                    CATERING</h3>
                <p class="text-gray-500 text-sm group-hover:text-white transition duration-300">
                    Delight your guests with our flavors and presentation
                </p>
            </div>

            <!-- Item 2 -->
            <div
                class="group bg-white p-6 rounded-xl shadow-md text-center cursor-pointer hover:bg-orange-400 transition duration-300">
                <div class="text-4xl mb-4 group-hover:text-white transition duration-300">🚚</div>
                <h3 class="text-lg font-bold text-[#1E2D3B] mb-2 group-hover:text-white transition duration-300">
                    FAST DELIVERY</h3>
                <p class="text-gray-500 text-sm group-hover:text-white transition duration-300">
                    We deliver your order promptly to your door
                </p>
            </div>

            <!-- Item 3 -->
            <div
                class="group bg-white p-6 rounded-xl shadow-md text-center cursor-pointer hover:bg-orange-400 transition duration-300">
                <div class="text-4xl mb-4 group-hover:text-white transition duration-300">🛒</div>
                <h3 class="text-lg font-bold text-[#1E2D3B] mb-2 group-hover:text-white transition duration-300">
                    ONLINE ORDERING</h3>
                <p class="text-gray-500 text-sm group-hover:text-white transition duration-300">
                    Explore menu & order with ease using our Online Ordering
                </p>
            </div>

            <!-- Item 4 -->
            <div
                class="group bg-white p-6 rounded-xl shadow-md text-center cursor-pointer hover:bg-orange-400 transition duration-300">
                <div class="text-4xl mb-4 group-hover:text-white transition duration-300">🎁</div>
                <h3 class="text-lg font-bold text-[#1E2D3B] mb-2 group-hover:text-white transition duration-300">
                    GIFT CARDS</h3>
                <p class="text-gray-500 text-sm group-hover:text-white transition duration-300">
                    Give the gift of exceptional dining with Foodi Gift Cards
                </p>
            </div>

        </div>
    </div>

    <section class="py-16 bg-white text-center">
        <p class="text-sm text-red-500 font-semibold uppercase mb-2">Specialty Dished</p>
        <h2 class="text-3xl font-bold text-[#1E2D3B] mb-10">Hidangan Terlaris Dari Menu Kami</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4 max-w-6xl mx-auto">
            <!-- Card -->
            <div class="bg-white shadow-lg rounded-3xl p-6 transition hover:scale-105 duration-300">
                <img src="{{asset('Ayam Drakor.jpeg')}}" alt="Makanan" class="w-24 h-24 mx-auto rounded-full object-cover mb-4">
                <h3 class="text-[#1E2D3B] font-semibold text-lg">Menu Makanan</h3>
                <p class="text-gray-500 text-sm mb-4">(15 Tersedia)</p>
                <div class="flex items-center justify-center gap-6">
                    <span class="text-red-500 font-semibold">Rp15.000</span>
                    <span class="flex items-center text-yellow-400 font-semibold">
                        ⭐ 4.5
                    </span>
                </div>
            </div>

            <!-- Ulangi card sebanyak yang dibutuhkan -->
            <div class="bg-white shadow-lg rounded-3xl p-6 transition hover:scale-105 duration-300">
                <img src="{{asset('Ayam Drakor.jpeg')}}" alt="Makanan" class="w-24 h-24 mx-auto rounded-full object-cover mb-4">
                <h3 class="text-[#1E2D3B] font-semibold text-lg">Menu Makanan</h3>
                <p class="text-gray-500 text-sm mb-4">(15 Tersedia)</p>
                <div class="flex items-center justify-center gap-6">
                    <span class="text-red-500 font-semibold">Rp15.000</span>
                    <span class="flex items-center text-yellow-400 font-semibold">
                        ⭐ 4.5
                    </span>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-3xl p-6 transition hover:scale-105 duration-300">
                <img src="{{asset('Ayam Drakor.jpeg')}}" alt="Makanan" class="w-24 h-24 mx-auto rounded-full object-cover mb-4">
                <h3 class="text-[#1E2D3B] font-semibold text-lg">Menu Makanan</h3>
                <p class="text-gray-500 text-sm mb-4">(15 Tersedia)</p>
                <div class="flex items-center justify-center gap-6">
                    <span class="text-red-500 font-semibold">Rp15.000</span>
                    <span class="flex items-center text-yellow-400 font-semibold">
                        ⭐ 4.5
                    </span>
                </div>
            </div>
        </div>
    </section>

</section>
