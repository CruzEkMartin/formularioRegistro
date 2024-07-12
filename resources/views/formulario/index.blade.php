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

    </div>



    <div class="container">
        <br>
        <form id="logout-form" action="{{ route('formulario.logout') }}" method="POST" class="d-none">
            @csrf
        </form>

        @if (session('scssmsg'))
            <script>
                Swal.fire({
                    title: "Correcto!",
                    text: ` {{ session('scssmsg') }}`,
                    icon: "success",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    showCancelButton: false,
                    confirmButtonText: "OK",
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('logout-form').submit();
                    }
                });
            </script>
        @endif

        @if (session('errormsg'))
            <script>
                Swal.fire({
                    title: "Error!",
                    text: ` {{ session('errormsg') }}`,
                    icon: "warning",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false
                });
            </script>
        @endif



        <form action="{{ route('formulario.store') }}" method="POST" class="was-validated"
            enctype="multipart/form-data">
            @csrf

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
                                <span class="input-group-text" id="lblNombre">{{ __('Nombre(s)') }}</span>
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
                                <span class="input-group-text"
                                    id="lblApellidoPaterno">{{ __('Apellido Paterno') }}</span>
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
                                <span class="input-group-text"
                                    id="lblApellidoMaterno">{{ __('Apellido Materno') }}</span>
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

                    <!-- municipio, modalidad-->
                    <div class="row">

                        <!--municipio-->
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="lblMunicipio">{{ __('Municipio') }}</span>
                                <input id="municipio" type="text"
                                    class="form-control @error('municipio') is-invalid @enderror" name="municipio"
                                    value="Othón P. Blanco" required disabled autofocus aria-label="Municipio"
                                    aria-describedby="lblMunicipio">
                            </div>

                        </div>


                        <!--modalidad-->
                        <div class="col-md-6">
                            <div class="input-group mb-3 align-items-center">
                                <span class="input-group-text" id="lblModalidad">{{ __('Modalidad') }}</span>
                                <div class="form-check ">
                                    <input
                                        class=" form-check-input form-control @error('modalidad') is-invalid @enderror"
                                        name="modalidad" type="radio" id="virtual" value="Virtual"
                                        {{ old('modalidad') == 'Virtual' ? 'checked' : '' }} checked disabled>
                                    <label class="form-check-label" for="virtual">Virtual</label>
                                </div>

                                <div class="form-check ">
                                    <input
                                        class="form-check-input form-control @error('modalidad') is-invalid @enderror"
                                        name="modalidad" type="radio" id="presencial" value="Presencial"
                                        {{ old('modalidad') == 'Presencial' ? 'checked' : '' }} disabled>
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



                    <!--fecha nacimiento, carta de autorizacion-->
                    <livewire:formulario.fecha-nacimiento-component>


                        <!--Tipo de representacion-->
                        <livewire:formulario.tipo-representacion-component />


                        <!--Discapacidades-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group mb-3 align-items-center">
                                    <span class="input-group-text"
                                        id="lblDiscapacidad">{{ __('Discapacidades') }}</span>
                                    <div class="form-check pl-2 mb-2">
                                        <input
                                            class="form-check-input form-control @error('discapacidad') is-invalid @enderror"
                                            name="discapacidad[]" type="checkbox" id="Fisica" value="Fisica"
                                            @if (in_array('Fisica', old('discapacidad', []))) checked @endif>
                                        <label class="form-check-label" for="Fisica">Fisica</label>
                                    </div>

                                    <div class="form-check pl-2 mb-2">
                                        <input
                                            class="form-check-input form-control @error('discapacidad') is-invalid @enderror"
                                            name="discapacidad[]" type="checkbox" id="Intelectual"
                                            value="Intelectual" @if (in_array('Intelectual', old('discapacidad', []))) checked @endif>
                                        <label class="form-check-label" for="Intelectual">Intelectual</label>
                                    </div>


                                    <div class="form-check pl-2 mb-2">
                                        <input
                                            class="form-check-input form-control @error('discapacidad') is-invalid @enderror"
                                            name="discapacidad[]" type="checkbox" id="Mental" value="Mental"
                                            @if (in_array('Mental', old('discapacidad', []))) checked @endif>
                                        <label class="form-check-label" for="Mental">Mental</label>
                                    </div>

                                    <div class="form-check pl-2 mb-2">
                                        <input
                                            class="form-check-input form-control @error('discapacidad') is-invalid @enderror"
                                            name="discapacidad[]" type="checkbox" id="Psicosocial"
                                            value="Psicosocial" @if (in_array('Psicosocial', old('discapacidad', []))) checked @endif>
                                        <label class="form-check-label" for="Psicosocial">Psicosocial</label>
                                    </div>

                                    <div class="form-check pl-2 mb-2">
                                        <input
                                            class="form-check-input form-control @error('discapacidad') is-invalid @enderror"
                                            name="discapacidad[]" type="checkbox" id="Multiple" value="Multiple"
                                            @if (in_array('Multiple', old('discapacidad', []))) checked @endif>
                                        <label class="form-check-label" for="Multiple">Multiple</label>
                                    </div>

                                    <div class="form-check pl-2 mb-2">
                                        <input
                                            class="form-check-input form-control @error('discapacidad') is-invalid @enderror"
                                            name="discapacidad[]" type="checkbox" id="Sensorial" value="Sensorial"
                                            @if (in_array('Sensorial', old('discapacidad', []))) checked @endif>
                                        <label class="form-check-label" for="Sensorial">Sensorial</label>
                                    </div>

                                    <div class="form-check pl-2 mb-2">
                                        <input
                                            class="form-check-input form-control @error('discapacidad') is-invalid @enderror"
                                            name="discapacidad[]" type="checkbox" id="Auditiva" value="Auditiva"
                                            @if (in_array('Auditiva', old('discapacidad', []))) checked @endif>
                                        <label class="form-check-label" for="Auditiva">Auditiva</label>
                                    </div>

                                    <div class="form-check pl-2 mb-2">
                                        <input
                                            class="form-check-input form-control @error('discapacidad') is-invalid @enderror"
                                            name="discapacidad[]" type="checkbox" id="Visual" value="Visual"
                                            @if (in_array('Visual', old('discapacidad', []))) checked @endif>
                                        <label class="form-check-label" for="Visual">Visual</label>
                                    </div>

                                    <div class="input-group col-md-6 ml-5 mt-2 mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input
                                                    class="form-check-input form-control @error('discapacidad') is-invalid @enderror"
                                                    name="discapacidad[]" type="checkbox" id="Otro"
                                                    value="Otro" @if (in_array('Otro', old('discapacidad', []))) checked @endif>
                                                <label class="form-check-label" for="Otro">Otro</label>
                                            </div>
                                        </div>
                                        <input id="txtOtro" type="text"
                                            class="form-control @error('txtOtro') is-invalid @enderror"
                                            name="txtOtro" value="{{ old('txtOtro') }}" autofocus aria-label="Otro">
                                    </div>



                                    {{-- <div class="form-check pl-2 mb-2">
                                        <input
                                            class="form-check-input form-control @error('discapacidad') is-invalid @enderror"
                                            name="discapacidad[]" type="checkbox" id="Otro" value="Otro"
                                            >
                                            <label class="form-check-label" for="Otro">Otro</label>
                                            <input
                                            class="form-control form-check-label @error('discapacidad') is-invalid @enderror"
                                            name="discapacidad[]" type="text" id="txtOtro" aria-describedby="Otro">
                                    </div> --}}

                                    {{--
                                    <div class="input-group col-md-6 ml-5 mt-2 mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="Otro">Otro</span>
                                        </div>
                                        <input
                                            class="form-control @error('discapacidad') is-invalid @enderror"
                                            name="discapacidad[]" type="text" id="Otro" aria-describedby="Otro">
                                    </div> --}}

                                    @error('discapacidad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!--apartado de propuestas-->
                        <livewire:formulario.propuesta-component>


                            <!--Subir aviso de privacidad documento-->
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group mb-3 align-items-start">
                                        <span class="input-group-text"
                                            id="lblAviso">{{ __('Aviso de Privacidad') }}</span>
                                        <label class="form-check-label col-md-10 ml-2" for="lblAviso">Manifiesto que
                                            he
                                            leído en su totalidad el Aviso de Privacidad Integral de la Consulta
                                            pública,
                                            abierta y regular, estrecha, libre e informada a personas con discapacidad
                                            en el
                                            Municipio de Othón P. Blanco en materia de sus derechos, transporte
                                            inclusivo y
                                            turismo inclusivo, y entiendo plenamente su alcance como contenido, por lo
                                            que
                                            otorgo mi consentimiento para que el Municipio de Othón P. Blanco trate mis
                                            datos personales de acuerdo al Aviso de Privacidad.</label>
                                    </div>
                                </div>
                            </div>

                            <!--check aviso de privacidad-->
                            <div class="row">
                                <div class="form-check">
                                    <input class="form-check-input" name="chkAviso" type="checkbox" value="1"
                                        {{ old('chkAviso') == '1' ? 'checked' : '' }} id="chkAviso" required>
                                    <label class="form-check-label" for="chkAviso">
                                        Confirmo que he Leído y Acepto el &nbsp;<a
                                            href="https://www.opb.gob.mx/consulta/pdf/AVISO%20DE%20PRIVACIDAD%20INTEGRAL%20PARA%20CONSULTA%20A%20PERSONAS%20CON%20DISCAPCIDAD.pdf"
                                            target="_blank">Aviso de Privacidad.</a>
                                    </label>
                                </div>
                                @error('chkAviso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <br>
                            </div>


                </div> {{-- card-body --}}

                <div class="card-footer">
                    <button type="submit" class="btn btn-success" value="Submit">Enviar
                        formulario de registro</button>
                </div>

            </div> {{-- card --}}

        </form>
    </div> {{-- container --}}


    <div id="modalVideo" class="modal fade">
        <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center">
            <div class="modal-content">
                <div class="modal-header primario">
                    <h5 class="modal-title ">VideoTutorial Registro</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe id="videoRegistro" class="embed-responsive-item" width="853" height="480"
                            src="https://www.youtube.com/embed/EKmf7F6wE2o?si=8jrrY-b0Ar0VHDn2?autoplay=1"
                            title="PASOS PARA EL REGISTRO AL PROGRAMA" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


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

    <script>
        $(document).ready(function() {

            @if (!session('scssmsg'))
                $('#modalVideo').modal('show')

                var url = $("#videoRegistro").attr('src');
                $("#videoRegistro").attr('src', '');

                $("#modalVideo").on('shown.bs.modal', function() {
                    $("#videoRegistro").attr('src', url);
                });

                $("#modalVideo").on('hide.bs.modal', function() {
                    $("#videoRegistro").attr('src', '');
                });
            @endif

        })
    </script>


</body>

</html>
