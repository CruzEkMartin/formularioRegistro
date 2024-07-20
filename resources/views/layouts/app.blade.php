<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Registro | Ayuntamiento de Othón P Blanco 2021-2024</title>

    <link rel="icon" href="https://www.opb.gob.mx/portal/wp-content/uploads/2021/10/cropped-Logo-Horizontal-32x32.png"
        sizes="32x32" />
    <link rel="icon"
        href="https://www.opb.gob.mx/portal/wp-content/uploads/2021/10/cropped-Logo-Horizontal-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://www.opb.gob.mx/portal/wp-content/uploads/2021/10/cropped-Logo-Horizontal-180x180.png" />


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link href="{{ asset('css/bootstrap@5.3.3.min.css') }}" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">

    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0px;
            height: 100%;
        }

        .titulo {
            font-weight: bolder;
            font-size: 2rem;
        }

        .linea {
            height: 10px;
            background: #2b1c00;
            margin-top: 10px;
        }

        .card-primary:not(.card-outline)>.card-header {
            background-color: #AB0A3D;
        }

        .bg-gobierno {
            background-color: #AB0A3D;

        }

        .bg-gobierno,
        .bg-gobierno>a {
            color: #fff !important;
        }


        input[type="radio"] {
            position: absolute;
            left: -9999px
        }

        input[type="radio"]+label {
            position: relative;
            padding: 3px 0 0 40px;
            cursor: pointer
        }

        input[type="radio"]+label:before {
            content: '';
            background: #fff;
            border: 2px solid #bbb;
            height: 25px;
            width: 25px;
            border-radius: 50%;
            position: absolute;
            top: 0;
            left: 0
        }

        input[type="radio"]+label:after {
            content: '';
            background: #B68400;
            /* #009DC7;*/
            width: 15px;
            height: 15px;
            border-radius: 50%;
            position: absolute;
            top: 5px;
            left: 5px;
            opacity: 0;
            transform: scale(2);
            transition: transform 0.3s linear, opacity 0.3s linear
        }

        input[type="radio"]:checked+label:after {
            opacity: 1;
            transform: scale(1)
        }



        input[type="checkbox"] {
            position: absolute;
            left: -9999px
        }

        input[type="checkbox"]+label {
            position: relative;
            padding: 3px 0 0 40px;
            cursor: pointer;
            color: rgb(120, 119, 121)
        }

        input[type="checkbox"]+label:before {
            content: '';
            background: #fff;
            border: 2px solid #ccc;
            border-radius: 3px;
            height: 25px;
            width: 25px;
            position: absolute;
            top: 0;
            left: 0
        }

        input[type="checkbox"]+label:after {
            content: '';
            border-style: solid;
            border-width: 0 0 2px 2px;
            border-color: transparent transparent #311B92 #311B92;
            width: 15px;
            height: 8px;
            position: absolute;
            top: 6px;
            left: 5px;
            opacity: 0;
            transform: scale(2) rotate(-45deg);
            transition: transform 0.3s linear, opacity 0.3s linear
        }

        input[type="checkbox"]:checked+label:after {
            opacity: 1;
            transform: scale(1) rotate(-45deg);
            color: #311B92
        }

        label {
            display: flex;
            align-items: center
        }

        .invalid-feedback {
            display: block;
        }

        @media (max-width: 767px) {
            .titulo {
                font-size: 1rem;

            }

        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>



    @yield('css')

</head>

<body>
    <div id="app">

        <div class="row justify-content-between align-items-center h-20">
            <div class="col-1">
                <img class="img-fluid"  src="{{ url('img/OPB_2021_2024_Logo_OPB2.png') }}"
                    alt="">
            </div>
            <div class="col-10 text-center">
                <span class="titulo">Ayuntamiento de Othón P Blanco 2021-2024</span>
            </div>
            <div class="col-1">
                <img class="img-fluid"  src="{{ url('img/OPB_2021_2024_Logo_AdmonOPB2.png') }}"
                    alt="">
            </div>
        </div>

        <div class="row linea shadow-sm">
        </div>

        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" style="color: white;" href="#">
                    {{ config('app.name', 'Registro') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu">
                                    <h5 class="dropdown-header bg-secondary text-white">
                                        REGISTRADOS
                                    </h5>
                                    <li>
                                        <a class="dropdown-item" href="/registros">{{ __('Registros') }}</a>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar Sesión') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>

                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <br>

        <main class="py-1">
            <div class="container-fluid">
                @yield('content')
            </div>
        </main>
    </div>

    @yield('js')

    @yield('script')

</body>

</html>
