<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>

    <style>
        header img {
            width: 190px;
            height: 50px;
        }

        header{
            background-color: #2074f0;
        }


        footer {
            background-color: #2074f0;
            color: #f0f0f0;
            padding: 15px 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        footer h5 {
            font-weight: 700;
            margin-bottom: 20px;
            letter-spacing: 1.2px;
        }

        footer p {
            font-size: 0.95rem;
            margin-bottom: 6px;
            opacity: 0.85;
        }
    </style>


    <header class=" p-2">
        <div class="container d-flex justify-content-between align-items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Foto">
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link text-black" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-black" href="{{ route('tentang') }}">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link text-black" href="{{ route('porto') }}">Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link text-black" href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>







    <div class="container">
        @yield('content')
    </div>


    <footer class="mt-5">
        <div class="container text-center">
            <h5>WebSiteBogor</h5>
            <div>
                <p>Jl. Raya Bogor No.KM 46, Nanggewer mekar,kec Cibinong,kab Bogor</p>
                <p>Email: kontak@bogorwebsite.com | Telp: 081234514325</p>
                <small>&copy; 2025 WebSiteBogor</small>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
        integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous">
    </script>
</body>

</html>
