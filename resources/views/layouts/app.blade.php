{{-- Layout utama dibuat oleh Wafiya Ramadhaning Tyas untuk UTS PWEB --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UTS PWEB')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #fff0f5; /* warna pink muda */
        }

        .navbar-dark {
            background-color: #d63384 !important; /* navbar pink tua */
        }

        .btn-primary {
            background-color: #d63384;
            border: none;
        }

        .btn-primary:hover {
            background-color: #b52d73;
        }

        h2, h3, h4 {
            color: #d63384; /* warna teks judul */
        }

        footer {
            background-color: #22252a;
            color: white;
        }
    </style>
</head>

<body>
    <x-navbar></x-navbar>

    <main class="container py-4">
        @yield('content')
    </main>

    <x-footer></x-footer>
</body>
</html>
