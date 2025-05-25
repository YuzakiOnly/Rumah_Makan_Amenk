<x-layouts :title="$title">
    <!-- Halaman -->
    <div class="w-full min-h-screen bg-[#fcfcfc] font-['Outfit'] mb-[70px]">
        <div class="flex items-center mt-[30px] mb-[30px] ml-[120px]">
            <a href="{{ url('/menu') }}" class="w-[48px] h-[48px] flex items-center justify-center rounded-full bg-[#FFA800] text-white text-[20px] shadow-md">
                <i class="fas fa-arrow-left"></i>
            </a>
            <span class="text-[26px] font-['Inter'] text-[#31515C] ml-[10px]">Kembali</span>
        </div>

        <div class="flex">
            <img src="{{ asset('assets/image/Ayam Drakor.jpeg') }}" alt=""
                class="w-[400px] h-[400px] rounded-[20px] ml-[160px]">
            <div class="flex flex-col mb-[35px] ml-[150px]">
                <h1 class="text-[40px] text-[#31515C]">Nasi Goreng Ayam</h1>
                {{-- <div class="text-[#FFD800] text-[22px] flex items-center">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star ml-1"></i>
                    <i class="fas fa-star ml-1"></i>
                    <i class="fas fa-star ml-1"></i>
                    <i class="fas fa-star ml-1"></i>
                    <span class="ml-2 text-[#666]">(2000+ Reviews)</span>
                </div> --}}
                <p class="text-[24px] text-[#666] w-[86%] mt-2">
                    Nasi Goreng Ayam Alah Rumah Amnek Penuh Dengan Cita Rasa Mulai Dari
                    Ayam yang Ditaburi Penuh Ke Dalam Nasi Goreng !!
                </p>
                <div class="text-[28px] text-[#31515C] mt-3">
                    Harga: <span class="text-red-600">Rp12.000</span>
                </div>

                <div class="flex items-center mt-5">
                    <button class="px-3 py-1 bg-gray-200">-</button>
                    <input type="text" value="1" class="w-[40px] text-center mx-2 border border-gray-300">
                    <button class="px-3 py-1 bg-gray-200">+</button>
                </div>

                <div class="flex gap-3 mt-4">
                    <a href="keranjang.html">
                        <button class="px-5 py-2 border border-[#FF9900] text-[#FF9900] bg-white rounded">+
                            Keranjang</button>
                    </a>
                    <a href="keranjang.html">
                        <button class="px-5 py-2 bg-[#FF9900] text-white rounded">Beli Sekarang</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts>
