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
</head>

<body class="bg-gray-50">
    <!-- navbar -->
    <x-navbar></x-navbar>
    <!-- navbar -->

    <!-- Container -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="w-full lg:w-1/2 h-64 lg:h-auto">
                    <img src="{{asset('assets/image/sekolah.jpg')}}" alt="Contact Us" class="w-full h-full object-cover" />
                </div>

                <!-- Form -->
                <div class="w-full lg:w-1/2 p-6 sm:p-8 lg:p-12">
                    <!-- Header section -->
                    <div class="space-y-4 mb-8">
                        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">KONTAK KAMI</h2>
                        <p class="text-gray-600 text-sm sm:text-base">
                            Kami ingin mendengar pendapat Anda! Silakan isi formulir di bawah ini dan kami akan
                            menghubungi Anda sesegera mungkin.
                        </p>
                    </div>

                    <form
                        action="https://script.google.com/macros/s/AKfycbx5JB8etreQPyINd7BDne4m-VFAZdIwSM2wMS9RWffB3LvYqOwhzmb-eA-KmfQPgZqm/exec"
                        method="post" class="space-y-6" name="contact-form" id="contact-form">
                        <!-- Name Input -->
                        <div class="space-y-2">
                            <label for="name" class="text-sm font-medium text-gray-700">Nama Anda</label>
                            <input type="text" id="your-name" name="Nama" placeholder="Masukkan nama Anda" required
                                class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all text-sm sm:text-base" />
                        </div>

                        <!-- Phone Input -->
                        <div class="space-y-2">
                            <label for="your-number" class="text-sm font-medium text-gray-700">
                                Nomor telepon
                            </label>
                            <input type="tel" id="your-number" name="No-telpon"
                                placeholder="Masukkan nomor telepon Anda" pattern="[0-9]+" required inputmode="numeric"
                                onkeypress="return event.charCode >= 48 && event.charCode <= 57" onpaste="return false"
                                class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all text-sm sm:text-base">
                            <p id="phone-error" class="text-blue-500 text-sm hidden">
                                Harap masukkan hanya angka
                            </p>
                        </div>

                        <!-- Email Input -->
                        <div class="space-y-2">
                            <label for="email" class="text-sm font-medium text-gray-700">Email Anda</label>
                            <input type="email" id="your-email" name="Email" placeholder="Masukkan email kamu" required
                                class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all text-sm sm:text-base" />
                        </div>

                        <!-- Message Input -->
                        <div class="space-y-2">
                            <label for="message" class="text-sm font-medium text-gray-700">Pesan</label>
                            <textarea id="message" name="Pesan" rows="7" placeholder="Tulis pesan Anda di sini..."
                                rows="4" required
                                class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all text-sm sm:text-base resize-none"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <input type="submit" value="Sumbit" id="sumbit"
                            class="w-full bg-blue-500 text-white py-3 px-6 rounded-lg hover:bg-blue-600 active:bg-blue-700 transition-colors duration-200 font-medium text-base shadow-md cursor-pointer" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <x-footer></x-footer>

    <script src="{{asset('assets/js/kontak.js')}}"></script>
    <script src="{{asset('assets/js/kontak.js')}}"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>
