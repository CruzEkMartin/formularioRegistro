<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>

    @include('components.layouts.partials.styles')

    <style>
        .colored-toast.swal2-icon-success {
            background-color: #21A64C !important;
        }

        .colored-toast.swal2-icon-error {
            background-color: #e70b0b !important;
        }

        .colored-toast.swal2-icon-warning {
            background-color: #ee8b35 !important;
        }

        .colored-toast.swal2-icon-info {
            background-color: #3fc3ee !important;
        }

        .colored-toast.swal2-icon-question {
            background-color: #87adbd !important;
        }

        .colored-toast .swal2-title {
            color: white;
        }

        .colored-toast .swal2-close {
            color: white;
        }

        .colored-toast .swal2-html-container {
            color: white;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ asset('img/logo.png') }}" alt="AdminLTELogo" height="60"
                width="60">
        </div> --}}

        <!-- Navbar -->
        @include('components.layouts.partials.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('components.layouts.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('components.layouts.partials.content_header')
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    @livewire('messages')

                    {{ $slot }}


                    <!-- /.row -->
                </div><!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        <!-- Main Footer -->
        @include('components.layouts.partials.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('components.layouts.partials.scripts')

    <!-- PLUGINS -->

    <script>
        document.addEventListener('livewire:init', () => {
            //cuando se recibe el evento close-modal, y el id del componente que lo manda
            Livewire.on('close-modal', (idModal) => {
                $('#' + idModal).modal('hide');
            })
        })

        document.addEventListener('livewire:init', () => {
            //cuando se recibe el evento close-modal, y el id del componente que lo manda
            Livewire.on('open-modal', (idModal) => {
                $('#' + idModal).modal('show');
            })
        })

        document.addEventListener('livewire:init', () => {
            //cuando se recibe el evento close-modal, y el id del componente que lo manda
            Livewire.on('delete', (e) => {
                //alert(e.id + '-'+e.eventName);
                Swal.fire({
                    title: "Estás seguro?",
                    text: "La eliminación será permanente y no se podrá revertir!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, eliminar el registro!",
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch(e.eventName, {
                            id: e.id
                        })

                    }
                });
            })
        })

        document.addEventListener('livewire:init', () => {
            //cuando se recibe el evento close-modal, y el id del componente que lo manda
            Livewire.on('mensaje', (msg) => {

                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    iconColor: 'white',
                    customClass: {
                        popup: 'colored-toast',
                    },
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true
                });
                Toast.fire({
                    icon: "success",
                    title: msg
                });

                // Swal.fire({
                //     position: "top-end",
                //     icon: "success",
                //     title: msg,
                //     showConfirmButton: false,
                //     timer: 3500
                // });

            })
        })
    </script>

</body>

</html>
