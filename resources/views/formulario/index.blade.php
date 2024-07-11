<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

    @livewireStyles

</head>

<body>
    <div class="container-fluid" style=" width: 100%;">

        <div class="row justify-content-between align-items-center">

            <img class="img-fluid img-responsive" style="width: 5%" src="{{ url('img/OPB_2021_2024_Logo_OPB2.png') }}"
                alt="">

            <span class="titulo">Ayuntamiento de Othón P Blanco 2021-2024</span>

            <img class="img-fluid" style="width: 4%" src="{{ url('img/OPB_2021_2024_Logo_AdmonOPB2.png') }}"
                alt="">

        </div>

        <div class="row linea shadow-sm">
        </div>

        <br>


        <div class="card">

            <div class="card-header text-center ">
                <h5>Registro al Programa</h5>
            </div> {{-- card-header --}}


            <div class="card-body">

                <!--nombre, apellido paterno, apellido materno-->
                <div class="row">

                    <!--nombre-->
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="lblNombre">{{ __('* Nombre(s)') }}</span>
                            <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus
                                aria-label="Nombre(s)" aria-describedby="lblNombre">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!--apellido paterno-->
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="lblApellidoPaterno">{{ __('* Apellido Paterno') }}</span>
                            <input id="apellido_paterno" type="text"
                                class="form-control @error('apellido_paterno') is-invalid @enderror"
                                name="apellido_paterno" value="{{ old('apellido_paterno') }}" required
                                autocomplete="apellido_paterno" autofocus aria-label="Apellido Paterno"
                                aria-describedby="lblApellidoPaterno">

                            @error('apellido_paterno')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!--apellido materno-->
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="lblApellidoMaterno">{{ __('* Apellido Materno') }}</span>
                            <input id="apellido_materno" type="text"
                                class="form-control @error('apellido_materno') is-invalid @enderror"
                                name="apellido_materno" value="{{ old('apellido_materno') }}" required
                                autocomplete="apellido_materno" autofocus aria-label="Apellido Materno"
                                aria-describedby="lblApellidoMaterno">

                            @error('apellido_materno')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>

                <!--fecha nacimiento, municipio, modalidad-->
                <div class="row">

                    <!--fecha nacimiento-->
                    <div class="col-md-4">
                        {{-- <div class="input-group mb-3">
                            <select id="year" name="yyyy" onchange="change_year(this)"
                                class="form-control @error('year') is-invalid @enderror" required>
                                <option value="" selected>Año</option>
                            </select>
                            @error('year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <select id="month" name="month" onchange="change_month(this)"
                                class="form-control @error('month') is-invalid @enderror" required>
                                <option value="" selected>Mes</option>
                            </select>
                            @error('month')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <select id="day" name="day"
                                class="form-control @error('day') is-invalid @enderror" disabled required>
                                <option value="" selected>Día</option>
                            </select>
                            @error('day')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}

                        <div class="input-group mb-3">
                            <span class="input-group-text"
                                id="lblFechaNacimiento">{{ __('* Fecha de Nacimiento') }}</span>
                            <input id="fecha_nacimiento" type="date"
                                class="form-control @error('fecha_nacimiento') is-invalid @enderror"
                                name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autofocus
                                aria-label="Fecha Nacimiento" aria-describedby="lblFechaNacimiento">

                            @error('fecha_nacimiento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                    </div>

                    <!--municipio-->
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="lblMunicipio">{{ __('* Municipio') }}</span>
                            <input id="municipio" type="text"
                                class="form-control @error('municipio') is-invalid @enderror" name="municipio"
                                value="Othón P. Blanco" required disabled autofocus aria-label="Municipio"
                                aria-describedby="lblMunicipio">
                        </div>

                    </div>


                    <!--modalidad-->
                    <div class="col-md-4">
                        <div class="input-group mb-3 align-items-center">
                            <span class="input-group-text" id="lblModalidad">{{ __('* Modalidad') }}</span>
                            <div class="form-check ">
                                <input class=" form-check-input form-control @error('modalidad') is-invalid @enderror"
                                    name="modalidad" type="radio" id="virtual" value="Virtual"
                                    {{ old('modalidad') == 'Virtual' ? 'checked' : '' }}>
                                <label class="form-check-label" for="virtual">Virtual</label>
                            </div>

                            <div class="form-check ">
                                <input class="form-check-input form-control @error('modalidad') is-invalid @enderror"
                                    name="modalidad" type="radio" id="presencial" value="Presencial"
                                    {{ old('modalidad') == 'Presencial' ? 'checked' : '' }}>
                                <label class="form-check-label" for="presencial">Presencial</label>
                            </div>

                        </div>
                        @error('modalidad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>


                <!--Tipo de representacion-->
                <div class="row">
                    <div class="col-md-12">
                        {{-- <livewire:formulario.tipo-representacion-component /> --}}
                    </div>

                </div>


                <!--Discapacidades-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mb-3 align-items-center">
                            <span class="input-group-text" id="lblDiscapacidad">{{ __('* Discapacidades') }}</span>
                            <div class="form-check ">
                                <input
                                    class="form-check-input form-control @error('discapacidad') is-invalid @enderror"
                                    name="discapacidad[]" type="checkbox" id="opcion_1" value="opcion_1"
                                    @if (in_array('opcion_1', old('discapacidad', []))) checked @endif>
                                <label class="form-check-label" for="opcion_1">Opcion 1</label>
                            </div>

                            <div class="form-check ">
                                <input
                                    class="form-check-input form-control @error('discapacidad') is-invalid @enderror"
                                    name="discapacidad[]" type="checkbox" id="opcion_2" value="opcion_2"
                                    @if (in_array('opcion_2', old('discapacidad', []))) checked @endif>
                                <label class="form-check-label" for="opcion_2">Opcion 2</label>
                            </div>

                            @error('discapacidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>


                <!--Accesibilidades-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mb-3 align-items-center">
                            <span class="input-group-text"
                                id="lblAccesibilidad">{{ __('* Medidas de Accesibilidad') }}</span>
                            <div class="form-check ">
                                <input
                                    class="form-check-input form-control @error('accesibilidad') is-invalid @enderror"
                                    name="accesibilidad[]" type="checkbox" id="opcion_11" value="opcion_1"
                                    @if (in_array('opcion_1', old('accesibilidad', []))) checked @endif>
                                <label class="form-check-label" for="opcion_11">Opcion 1</label>
                            </div>

                            <div class="form-check ">
                                <input
                                    class="form-check-input form-control @error('accesibilidad') is-invalid @enderror"
                                    name="accesibilidad[]" type="checkbox" id="opcion_22" value="opcion_2"
                                    @if (in_array('opcion_2', old('accesibilidad', []))) checked @endif>
                                <label class="form-check-label" for="opcion_22">Opcion 2</label>
                            </div>

                            @error('accesibilidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>



                <!--Propuesta de iniciativa documento-->
                <div class="row">
                    <div class="col-12">
                        {{-- <livewire:formulario.subir-archivo-iniciativa-component /> --}}
                    </div>
                </div>

                 <!--Propuesta de iniciativa video-->
                 <div class="row">
                    <div class="col-12">
                        {{-- <livewire:formulario.subir-video-iniciativa-component /> --}}
                    </div>
                </div>


                                      <!--Formulario de consulta-->
                <div class="row">

                      <div class="col-md-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="lblConsulta">{{ __('* Formulario de Consulta') }}</span>
                            <input id="consulta" type="text"
                                class="form-control @error('consulta') is-invalid @enderror" name="consulta"
                                value="Formulario de consulta" required disabled autofocus aria-label="Consulta"
                                aria-describedby="lblConsulta">
                        </div>

                    </div>
                </div>


                  <!--Subir carta de autorizacion documento-->
                  <div class="row">
                    <div class="col-12">
                        {{-- <livewire:formulario.subir-carta-autorizacion-component /> --}}
                    </div>
                </div>


                 <!--Subir aviso de privacidad documento-->
                 <div class="row">
                    <div class="col-12">
                        {{-- <livewire:formulario.subir-aviso-privacidad-component /> --}}
                    </div>
                </div>



            </div> {{-- card-body --}}

        </div> {{-- card --}}

    </div> {{-- container --}}




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script>
        var Days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]; // index => month [0-11]
        var Months = ['ENE', 'FEB', 'MAR', 'ABR', 'MAY', 'JUN', 'JUL', 'AGO', 'SEP', 'OCT', 'NOV', 'DEC'];

        $(document).ready(function() {
            var option = '<option value="">Día</option>';
            var selectedDay = "Dia";
            for (var i = 1; i <= Days[0]; i++) { //add option days
                option += '<option value="' + i + '">' + i + '</option>';
            }
            $('#day').append(option);
            $('#day').val(selectedDay);

            var option = '';
            var selectedMon = "";
            for (var i = 1; i <= 12; i++) {
                option += '<option value="' + i + '">' + Months[i - 1] + '</option>';
            }
            $('#month').append(option);
            $('#month').val(selectedMon);

            var d = new Date();
            var option = '';
            selectedYear = "";
            for (var i = 1930; i <= d.getFullYear(); i++) { // years start i
                option += '<option value="' + i + '">' + i + '</option>';
            }
            $('#year').append(option);
            $('#year').val(selectedYear);
        });

        function isLeapYear(year) {
            year = parseInt(year);
            if (year % 4 != 0) {
                return false;
            } else if (year % 400 == 0) {
                return true;
            } else if (year % 100 == 0) {
                return false;
            } else {
                return true;
            }
        }

        function change_year(select) {
            if (isLeapYear($(select).val())) {
                Days[1] = 29;
                if ($("#month").val() == 2) {
                    var day = $('#day');
                    var val = $(day).val();
                    $(day).empty();
                    var option = '<option value="">Día</option>';
                    for (var i = 1; i <= Days[1]; i++) { //add option days
                        option += '<option value="' + i + '">' + i + '</option>';
                    }
                    $(day).append(option);
                    if (val > Days[month]) {
                        val = 1;
                    }
                    $(day).val(val);
                }
            } else {
                Days[1] = 28;
            }
        }

        function change_month(select) {
            var day = $('#day');
            var val = $(day).val();
            $(day).empty();
            var option = '<option value="">Día</option>';
            var month = parseInt($(select).val()) - 1;

            if ($("#month").val() > 0) {
                day.prop('disabled', false);
                day.prop('required', true);

                for (var i = 1; i <= Days[month]; i++) { //add option days
                    option += '<option value="' + i + '">' + i + '</option>';
                }
                $(day).append(option);
                if (val > Days[month]) {
                    val = 1;
                }
                $(day).val(val);
            } else {
                val = "";
                day.append(option);
                day.val(val);
                day.prop('disabled', true);
                day.prop('required', false);
            }
        }
    </script>

    @livewireScripts

</body>

</html>
