<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


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
            font-size: 1.5rem;
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


</head>

<body>
    <div class="container-fluid" style=" width: 100%;">

        <div class="row justify-content-between align-items-center">

            <img class="img-fluid" style="width: 5%" src="{{ url('img/OPB_2021_2024_Logo_OPB2.png') }}"
                alt="">

            <span class="titulo">Ayuntamiento de Othón P Blanco 2021-2024</span>

            <img class="img-fluid" style="width: 4%" src="{{ url('img/OPB_2021_2024_Logo_AdmonOPB2.png') }}"
                alt="">

        </div>

        <div class="row linea shadow-sm">
        </div>

        <br>

        {{ $slot }}

    </div> {{-- container --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>
