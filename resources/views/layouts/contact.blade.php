<x-layouts :title="$title">
    <!-- Container -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="w-full lg:w-1/2 h-64 lg:h-auto">
                    <img src="{{ asset('assets/image/sekolah.jpg') }}" alt="Contact Us"
                        class="w-full h-full object-cover" />
                </div>

                <!-- Form -->
                <div class="w-full lg:w-1/2 p-6 sm:p-8 lg:p-12">
                    <!-- Header section -->
                    <div class="space-y-4 mb-8">
                        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">KONTAK KAMI</h2>
                        <p class="text-gray-600 text-sm sm:text-base">
                            Kami ingin mendengar pendapat Anda! Silakan isi formulir di bawah ini dan kami akan menghubungi Anda sesegera mungkin.
                        </p>
                    </div>

                    <form method="POST" enctype="multipart/form-data" class="space-y-6" name="contact-form" id="contact-form" action="">
                        <!-- Name Input -->
                        <div class="space-y-2">
                            <label for="your-name" class="text-sm font-medium text-gray-700">Nama Anda</label>
                            <input type="text" id="your-name" name="Nama" placeholder="Masukkan nama Anda" required
                                class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all text-sm sm:text-base" />
                        </div>

                        <!-- Phone Input -->
                        <div class="space-y-2">
                            <label for="your-number" class="text-sm font-medium text-gray-700">Nomor Telepon</label>
                            <input type="tel" id="your-number" name="No-telpon" placeholder="Masukkan nomor telepon Anda"
                                pattern="[0-9]+" required inputmode="numeric"
                                onkeypress="return event.charCode >= 48 && event.charCode <= 57" onpaste="return false"
                                class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all text-sm sm:text-base" />
                            <p id="phone-error" class="text-blue-500 text-sm hidden">Harap masukkan hanya angka</p>
                        </div>

                        <!-- Email Input -->
                        <div class="space-y-2">
                            <label for="your-email" class="text-sm font-medium text-gray-700">Email Anda</label>
                            <input type="email" id="your-email" name="Email" placeholder="Masukkan email kamu" required
                                class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all text-sm sm:text-base" />
                        </div>

                        <!-- Message Input -->
                        <div class="space-y-2">
                            <label for="message" class="text-sm font-medium text-gray-700">Pesan</label>
                            <textarea id="message" name="Pesan" rows="7" placeholder="Tulis pesan Anda di sini..." required
                                class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all text-sm sm:text-base resize-none"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <input type="submit" value="Submit"
                            class="w-full bg-blue-500 text-white py-3 px-6 rounded-lg hover:bg-blue-600 active:bg-blue-700 transition-colors duration-200 font-medium text-base shadow-md cursor-pointer" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts>
