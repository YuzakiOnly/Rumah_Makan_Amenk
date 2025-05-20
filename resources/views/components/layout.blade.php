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

    <!-- Tambahkan ini di <head> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Boxicons Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Boxicons Link -->

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @vite('resources/css/app.css')
    <title>Rumah Amenk | {{$title ?? 'home'}}</title>
</head>

<body>
    <x-navbar></x-navbar>

    {{$slot}}

    <x-footer></x-footer>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/footer.js') }}"></script>
</body>

</html>
