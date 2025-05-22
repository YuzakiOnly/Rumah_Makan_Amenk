<nav class="font-[Poppins] sticky top-0 z-50 bg-white shadow-sm">
    <div class="flex justify-between items-center px-6 py-4 max-w-7xl mx-auto">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center space-x-3">
            <div>
                <img src="{{ asset('assets/image/logo/amenk.jpg') }}" alt="Logo" class="h-10 rounded-full" />
            </div>
            <span class="text-xl font-bold text-[#31515C]">Rumah Amenk</span>
        </a>

        <!-- Hamburger (Mobile) -->
        <div class="md:hidden">
            <button id="menu-toggle" class="focus:outline-none">
                <svg class="w-6 h-6 text-[#31515C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Menu (Desktop) -->
        <div class="hidden md:flex space-x-10 items-center">
            <a href="{{ url('/') }}"
                class="text-lg font-medium {{ request()->is('/') ? 'text-[#FFA800]' : 'text-[#31515C] hover:text-[#FFA800]' }}">
                Home
            </a>
            <a href="{{ url('/menu') }}"
                class="text-lg font-medium {{ request()->is('menu*') ? 'text-[#FFA800]' : 'text-[#31515C] hover:text-[#FFA800]' }}">
                Menu
            </a>
            <a href="{{ url('/') }}#serv" class="text-lg font-medium text-[#31515C] hover:text-[#FFA800]">
                Services
            </a>
            <a href="{{ url('/contact') }}"
                class="text-lg font-medium {{ request()->is('contact') ? 'text-[#FFA800]' : 'text-[#31515C] hover:text-[#FFA800]' }}">
                Contact
            </a>
        </div>

        <div class="hidden md:block">
            <a href="{{ url('/login') }}"
                class="inline-flex items-center px-5 py-2 bg-orange-500 text-white text-base rounded-full shadow-md hover:bg-orange-600 transition">
                Login
            </a>
        </div>
    </div>
</nav>
