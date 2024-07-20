<nav class="main-header navbar navbar-expand  navbar-dark" style="background-color: #ab0a3d;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa-solid fa-bars"></i></a>
        </li>


    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown user-menu" >
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                {{-- <img src="{{ asset('dist/img/avatar5.png') }}" class="user-image img-circle elevation-2" alt="User Image"> --}}
                <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                <i class="right text-white fas fa-angle-right"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                <!-- User image -->
                <li class="user-header text-bold" style="background-color: #b68400;">
                    {{-- <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image"> --}}

                    <p>
                        {{ Auth::user()->name }}
                        <strong>{{ Auth::user()->admin ? 'Administrador': 'Usuario'}}</strong>
                    </p>
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                    {{-- <a href="{{ route('usuario.show', auth()->user() ) }}" class="btn btn-default btn-flat">Perfil</a> --}}
                    <a class="btn btn-default btn-flat float-right" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        Salir
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

    </ul>
</nav>