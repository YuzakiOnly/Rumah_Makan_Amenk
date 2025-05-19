<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./fontawesome-free-6.6.0-web/css/all.min.css " rel="stylesheet" />
    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.gooleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <!-- Link Google Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Boxicons Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Boxicons Link -->

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @vite('resources/css/app.css')
    <title>Rumah Amenk</title>
</head>

<body>
    <!-- Navbar -->
    <x-navbar></x-navbar>
    <!-- navbar -->

    <!-- Hero Section -->
    <div class="font-[Inter] flex flex-col-reverse md:flex-row items-center justify-between w-full px-6 md:px-16 py-16 max-w-7xl mx-auto">
        <!-- Text -->
        <div class="w-full md:w-1/2 text-center md:text-left mt-8 md:mt-0">
            <h2 class="text-[#FFA800] text-2xl font-semibold mb-4">SELAMAT DATANG</h2>
            <h1 class="text-4xl md:text-5xl font-extrabold text-[#31515C] leading-tight">
                Nikmati Kelezatan<br />
                Rumah Makan <span class="text-[#FFA800]">Amenk</span>
            </h1>
            <p class="text-[#666666] text-lg mt-5 mb-6 px-2 md:px-0">
                Di mana Setiap Piring Menenun Kisah Penguasaan Kuliner dan Keahlian yang Penuh Semangat.
            </p>
            <a href="{{ route('menu.index') }}">
                <button
                    class="bg-[#FFA800] hover:bg-[#31515C] text-white text-lg font-medium px-10 py-4 rounded-full shadow-md transition duration-300">
                    MENU KAMI
                </button>
            </a>
        </div>

        <!-- Image -->
        <div class="w-full md:w-1/2 flex justify-center md:justify-end">
            <img src="{{ asset('assets/image/logo/logo.png') }}" alt="A delicious plate of food from Rumah Amenk"
                class="w-[260px] h-[260px] md:w-[450px] md:h-[450px] object-cover rounded-full border-[10px] border-[#FFA800]" />
        </div>
    </div>

    <!-- Halaman Kedua -->
    <section class="pt-24 font-[Inter] px-4 py-10">
        <!-- Judul -->
        <div class="text-center text-[#ff6b6b] text-[20px]">
            <h6>CUSTOMER FAVORITES</h6>
            <h6 class="text-[#2c3e50] text-[32px] sm:text-[35px] font-extrabold mt-2">Katagori Populer</h6>
        </div>

        <!-- Kategori Cards -->
        <div class="flex flex-wrap justify-center gap-6 sm:gap-10 mt-10 font-[Outfit] max-w-screen-xl mx-auto">
            <!-- Card 1 -->
            <div
                class="bg-white rounded-[30px] shadow-md sm:w-[200px] w-[90%] p-5 text-center transition-transform duration-300 hover:-translate-y-1 hover:-translate-x-1">
                <img src="{{ asset('assets/image/Ayam Drakor.jpeg') }}" alt="Menu Makanan"
                    class="w-[100px] h-[100px] rounded-full bg-[#ffcc00] p-1 mx-auto" />
                <div class="text-[#2c3e50] text-lg font-bold mt-4">Menu Makanan</div>
                <div class="text-[#7f8c8d] text-sm mt-1">(15 Tersedia)</div>
            </div>

            <!-- Card 2 -->
            <div
                class="bg-white rounded-[30px] shadow-md sm:w-[200px] w-[90%] p-5 text-center transition-transform duration-300 hover:-translate-y-1 hover:-translate-x-1">
                <img src="{{ asset('assets/image/Ayam Drakor.jpeg') }}" alt="Menu Minuman"
                    class="w-[100px] h-[100px] rounded-full bg-[#ffcc00] p-1 mx-auto" />
                <div class="text-[#2c3e50] text-lg font-bold mt-4">Menu Minuman</div>
                <div class="text-[#7f8c8d] text-sm mt-1">(7 Tersedia)</div>
            </div>

            <!-- Card 3 -->
            <div
                class="bg-white rounded-[30px] shadow-md sm:w-[200px] w-[90%] p-5 text-center transition-transform duration-300 hover:-translate-y-1 hover:-translate-x-1">
                <img src="{{ asset('assets/image/Ayam Drakor.jpeg') }}" alt="Menu Cemilan"
                    class="w-[100px] h-[100px] rounded-full bg-[#ffcc00] p-1 mx-auto" />
                <div class="text-[#2c3e50] text-lg font-bold mt-4">Menu Cemilan</div>
                <div class="text-[#7f8c8d] text-sm mt-1">(7 Tersedia)</div>
            </div>
        </div>
    </section>

    <!-- Halaman Ketiga -->
    <div class="flex flex-col items-center justify-center pt-24 text-[#ff6b6b] font-[Inter] text-[22px] px-4 md:px-8">
        <div class="h-10">
            <h6>SPECIALTY DISHED</h6>
        </div>
        <div class="text-center">
            <h6><span class="text-[#2c3e50] text-[28px] md:text-[35px] font-bold">Hidangan Terlaris Dari Menu
                    Kami</span></h6>
        </div>
    </div>

    <div class="flex flex-wrap justify-center gap-8 py-12 font-[Outfit]">
        <!-- Card -->
        <div
            class="bg-white rounded-4xl shadow-md w-[240px] p-6 text-center transition-all duration-700 hover:-translate-y-2 hover:-translate-x-2 sm:w-[200px] md:w-[220px] lg:w-[240px] xl:w-[250px]">
            <img src="{{ asset('assets/image/Ayam Drakor.jpeg') }}" alt="Image of a burger"
                class="rounded-full p-2 mx-auto" />
            <div class="text-[#2c3e50] text-[20px] font-bold pt-5 text-left">Menu Makanan</div>
            <div class="text-[#7f8c8d] text-[16px] mt-1 h-7 pr-2 text-left">(15 Tersedia)</div>

            <div class="flex justify-between items-center pt-5">
                <div class="text-[22px] font-medium text-left flex items-center">
                    <span class="text-[#ff6b6b] mr-1">Rp</span>15.000
                </div>
                <div class="flex items-center gap-1 text-[#FFA800] text-[22px]">
                    <span class="material-icons mr-1">star</span>
                    <span>4.5</span>
                </div>
            </div>
        </div>
        <!-- Card -->
        <div
            class="bg-white rounded-4xl shadow-md w-[240px] p-6 text-center transition-all duration-700 hover:-translate-y-2 hover:-translate-x-2 sm:w-[200px] md:w-[220px] lg:w-[240px] xl:w-[250px]">
            <img src="{{ asset('assets/image/Ayam Drakor.jpeg') }}" alt="Image of a burger"
                class="rounded-full p-2 mx-auto" />
            <div class="text-[#2c3e50] text-[20px] font-bold pt-5 text-left">Menu Makanan</div>
            <div class="text-[#7f8c8d] text-[16px] mt-1 h-7 pr-2 text-left">(15 Tersedia)</div>

            <div class="flex justify-between items-center pt-5">
                <div class="text-[22px] font-medium text-left flex items-center">
                    <span class="text-[#ff6b6b] mr-1">Rp</span>15.000
                </div>
                <div class="flex items-center gap-1 text-[#FFA800] text-[22px]">
                    <span class="material-icons mr-1">star</span>
                    <span>4.5</span>
                </div>
            </div>
        </div>
        <!-- Card -->
        <div
            class="bg-white rounded-4xl shadow-md w-[240px] p-6 text-center transition-all duration-700 hover:-translate-y-2 hover:-translate-x-2 sm:w-[200px] md:w-[220px] lg:w-[240px] xl:w-[250px]">
            <img src="{{ asset('assets/image/Ayam Drakor.jpeg') }}" alt="Image of a burger"
                class="rounded-full p-2 mx-auto" />
            <div class="text-[#2c3e50] text-[20px] font-bold pt-5 text-left">Menu Makanan</div>
            <div class="text-[#7f8c8d] text-[16px] mt-1 h-7 pr-2 text-left">(15 Tersedia)</div>

            <div class="flex justify-between items-center pt-5">
                <div class="text-[22px] font-medium text-left flex items-center">
                    <span class="text-[#ff6b6b] mr-1">Rp</span>15.000
                </div>
                <div class="flex items-center gap-1 text-[#FFA800] text-[22px]">
                    <span class="material-icons mr-1">star</span>
                    <span>4.5</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Halaman Ketiga -->

    <!-- Halaman Keempat -->
    <div id="serv"
        class="flex flex-col lg:flex-row justify-center items-start gap-16 py-[140px] font-[Inter] px-4">
        <!-- Kiri: Teks -->
        <div class="max-w-2xl mt-16 text-center lg:text-left">
            <div class="text-[#ff6b6b] text-[16px] font-medium mb-6">OUR STORY & SERVICES</div>
            <div class="text-[#2d3e50] text-[28px] sm:text-[35px] font-bold mb-6 leading-tight">
                Layanan Rumah Makan<br>Amenk Kami
            </div>
            <div class="text-[#6c757d] text-[14px] sm:text-[16px] leading-relaxed">
                Berakar pada semangat, kami menciptakan pengalaman bersantap
                yang tak terlupakan dan menawarkan layanan yang luar biasa, memadukan seni kuliner dengan keramahan yang
                hangat.
            </div>
        </div>

        <!-- Kanan: Card Services -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8 justify-center items-center">
            <!-- Service 1 -->
            <div
                class="group bg-white rounded-xl shadow-md w-[220px] px-6 py-12 text-center transition-all duration-300 hover:bg-[#FFA800] cursor-pointer mx-auto">
                <span
                    class="material-icons text-[36px] mb-2 text-[#2d3e50] group-hover:text-white transition-colors">restaurant</span>
                <div class="text-[#2d3e50] text-[18px] font-bold mb-2 group-hover:text-white transition-colors">
                    CATERING
                </div>
                <div class="text-[#6c757d] text-[14px] leading-relaxed group-hover:text-white transition-colors">
                    Delight your guests with our flavors and presentation
                </div>
            </div>

            <!-- Service 2 -->
            <div
                class="group bg-white rounded-xl shadow-md w-[220px] px-6 py-12 text-center transition-all duration-300 hover:bg-[#FFA800] cursor-pointer mx-auto">
                <span
                    class="material-icons text-[36px] mb-2 text-[#2d3e50] group-hover:text-white transition-colors">local_shipping</span>
                <div class="text-[#2d3e50] text-[18px] font-bold mb-2 group-hover:text-white transition-colors">FAST
                    DELIVERY</div>
                <div class="text-[#6c757d] text-[14px] leading-relaxed group-hover:text-white transition-colors">
                    We deliver your order promptly to your door
                </div>
            </div>

            <!-- Service 3 -->
            <div
                class="group bg-white rounded-xl shadow-md w-[220px] px-6 py-12 text-center transition-all duration-300 hover:bg-[#FFA800] cursor-pointer mx-auto">
                <span
                    class="material-icons text-[36px] mb-2 text-[#2d3e50] group-hover:text-white transition-colors">shopping_cart</span>
                <div class="text-[#2d3e50] text-[18px] font-bold mb-2 group-hover:text-white transition-colors">ONLINE
                    ORDERING</div>
                <div class="text-[#6c757d] text-[14px] leading-relaxed group-hover:text-white transition-colors">
                    Explore menu & order with ease using our Online Ordering
                </div>
            </div>

            <!-- Service 4 -->
            <div
                class="group bg-white rounded-xl shadow-md w-[220px] px-6 py-12 text-center transition-all duration-300 hover:bg-[#FFA800] cursor-pointer mx-auto">
                <span
                    class="material-icons text-[36px] mb-2 text-[#2d3e50] group-hover:text-white transition-colors">card_giftcard</span>
                <div class="text-[#2d3e50] text-[18px] font-bold mb-2 group-hover:text-white transition-colors">GIFT
                    CARDS</div>
                <div class="text-[#6c757d] text-[14px] leading-relaxed group-hover:text-white transition-colors">
                    Give the gift of exceptional dining with Foodi Gift Cards
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <x-footer></x-footer>
    {{-- footer --}}

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/footer.js') }}"></script>
</body>

</html>
