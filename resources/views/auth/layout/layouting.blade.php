<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <header class="bg-white">
        <nav class="container d-flex justify-content-between align-items-center">
            <div>
                <h3>Sistem Penunjang Keputusan</h3>
            </div>
            <div class="d-flex">
                <h5><a href="login" class="me-4 text-decoration-none text-dark">Masuk</a></h5>
                <h5 class="me-5"><a href="register" class="text-decoration-none text-dark">Daftar</a></h5>
            </div>
        </nav>
    </header>
    @yield('main')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>