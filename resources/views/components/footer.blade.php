<footer class="bg-[#31515C] text-white font-['Work_Sans'] w-full">
    <section class="py-24 px-4 lg:px-[13%] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
        <!-- Logo & Deskripsi -->
        <div>
            <h2 class="font-bold text-2xl mb-4">AMENK SALAD</h2>
            <p class="text-[#d6d6d6] text-[16px] leading-[30px] mb-6">
                Di mana Setiap Piring Menenun Kisah Penguasaan Kuliner dan Keahlian yang Penuh Semangat.
            </p>
            <div class="flex space-x-4 text-[#d6d6d6] text-[22px]">
                <a href="#" class="hover:text-white hover:-translate-y-1 transition-transform duration-300"><i
                        class='bx bxl-facebook-circle'></i></a>
                <a href="#" class="hover:text-white hover:-translate-y-1 transition-transform duration-300"><i
                        class='bx bxl-twitter'></i></a>
                <a href="https://www.instagram.com/?hl=en"
                    class="hover:text-white hover:-translate-y-1 transition-transform duration-300"><i
                        class='bx bxl-instagram-alt'></i></a>
                <a href="https://www.youtube.com/"
                    class="hover:text-white hover:-translate-y-1 transition-transform duration-300"><i
                        class='bx bxl-youtube'></i></a>
            </div>
        </div>

        <!-- Project Links -->
        <div>
            <h4 class="text-white text-xl font-semibold mb-6">Projects</h4>
            <ul class="space-y-4 text-[#d6d6d6] text-[15px]">
                <li><a href="{{ url('/') }}"
                        class="hover:text-white hover:-translate-x-1 transition duration-300 block">Home</a></li>
                <li><a href="{{ route('menu.index') }}"
                        class="hover:text-white hover:-translate-x-1 transition duration-300 block">Menu</a></li>
                <li><a href="{{ url('/serv') }}"
                        class="hover:text-white hover:-translate-x-1 transition duration-300 block">Services</a>
                </li>
                <li><a href="{{ url('/contact') }}"
                        class="hover:text-white hover:-translate-x-1 transition duration-300 block">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Company Links -->
        <div>
            <h4 class="text-white text-xl font-semibold mb-6">Company</h4>
            <ul class="space-y-4 text-[#d6d6d6] text-[15px]">
                <li><a href="#" class="hover:text-white hover:-translate-x-1 transition duration-300 block">How to
                        work</a>
                </li>
                <li><a href="#"
                        class="hover:text-white hover:-translate-x-1 transition duration-300 block">Capital</a>
                </li>
                <li><a href="#"
                        class="hover:text-white hover:-translate-x-1 transition duration-300 block">Security</a>
                </li>
                <li><a href="#"
                        class="hover:text-white hover:-translate-x-1 transition duration-300 block">Sellings</a>
                </li>
            </ul>
        </div>

        <!-- Help Links -->
        <div>
            <h4 class="text-white text-xl font-semibold mb-6">Help</h4>
            <ul class="space-y-4 text-[#d6d6d6] text-[15px]">
                <li><a href="#"
                        class="hover:text-white hover:-translate-x-1 transition duration-300 block">Privacy</a>
                </li>
                <li><a href="#"
                        class="hover:text-white hover:-translate-x-1 transition duration-300 block">Condition</a>
                </li>
                <li><a href="#"
                        class="hover:text-white hover:-translate-x-1 transition duration-300 block">Blog</a></li>
                <li><a href="#"
                        class="hover:text-white hover:-translate-x-1 transition duration-300 block">FAQs</a></li>
            </ul>
        </div>
    </section>
</footer>
