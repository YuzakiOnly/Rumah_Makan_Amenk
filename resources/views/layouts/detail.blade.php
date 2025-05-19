<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link rel="stylesheet" href="{{asset('assets/css/detail.css')}}">
    <link rel="icon" href="../Asset/koperasilogo.png">
    <!-- Link Google Font -->
    <link href="./fontawesome-free-6.6.0-web/css/all.min.css " rel="stylesheet" />
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>
<body>
    <!-- navbar -->
    <x-navbar></x-navbar>
    <!-- navbar -->

    <!-- Halaman -->
    <div class="container">
        <div class="back-button">
            <a href="{{url('/menu')}}"><i class="fas fa-arrow-left"></i></a>
            <span> Kembali </span>
        </div>

        <div class="product">
            <img src="{{asset('assets/image/Ayam Drakor.jpeg')}}" alt="">
            <div class="product-details">
                <h1>Nasi Goreng Ayam</h1>
                <div class="stars">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <span> (2000+ Reviews) </span>
                </div>
                <p>Nasi Goreng Ayam Alah Rumah Amnek Penuh Dengan Cita Rasa Mulai Dari
                Ayam yang Ditaburi Penuh Ke Dalam Nasi Goreng !!</p>
                <div class="price">Harga :<span> Rp12.000 </span></div>

                <!-- <div class="quantity">
                    <button>-</button>
                    <input type="text" value="1" />
                    <button>+</button>
                </div>

                <div class="buttons">
                    <a href="keranjang.html"><button class="cart">+Keranjang</button></a>
                    <a href="keranjang.html"><button class="buy">Beli Sekarang</button></a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- halaman -->

    {{-- footer --}}
    <x-footer></x-footer>

    <script src="{{asset('assets/js/kontak.js')}}"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
