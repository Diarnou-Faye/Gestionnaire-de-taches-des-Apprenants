<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--
    <link rel="stylesheet" href="{{ asset('css/styletailwind.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>TASK TO DO</title>
</head>

<body id="container">
    <nav class="z-50 mx-auto mt-1 mb-5 navbar navbar-expand-lg fixed-top" id="nav">
        <div class="container">
            <a class="navbar-brand" href="{{ route('Home') }}">
                <img src="images/logoTD.svg" id="logoTD" alt="LogoDD" class=" img" />
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"> </span>
            </button>
            <div class="w-100 collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class=" nav-link" href="{{ route('Home') }}"> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link" href="{{ route('registration') }}">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link competences" href="{{ route('Connection') }}">
                            Connexion
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link me-lg-5" href="{{ route('Connection') }}">
                            Dashboard
                        </a>
                    </li>
                </ul>
                <a id="Settings" class="nav-link ms-lg-5" href="{{ route('dashboard') }}">
                    Settings<img src="images/bx-wrench.svg" alt="Settings">
                </a>
            </div>

        </div>
    </nav>

    <div class="z-n99">
        @yield('page-content')
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>