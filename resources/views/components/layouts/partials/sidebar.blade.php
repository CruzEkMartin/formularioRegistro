<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #440412;">
    <!-- Brand Logo -->

    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('img/OPB_2021_2024_Logo_AdmonOPB2.png') }}" alt="Logo Aytto 2021-2024"
            class="brand-image img-circle text-white elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Registros Consulta</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item ">
                <a href="{{ route('registros') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-users nav-icon"></i>
                    <p>
                        Registros
                    </p>
                </a>
               </li>

 {{--

               <li class="nav-item ">
                <a href="{{ route('asistencias') }}" class="nav-link">
                    <i class="nav-icon fas fa-user-check nav-icon"></i>
                    <p>
                        Asistencias
                    </p>
                </a>
               </li>


                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-list-alt"></i>
                        <p>
                            Catálogos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('usuarios') }}" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p>
                                    Usuarios
                                </p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
