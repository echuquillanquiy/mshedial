<div class="topbar-nav header navbar" role="banner">
    <nav id="topbar">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="/">
                    <img src="assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="/" class="nav-link"> Hedial </a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="topAccordion">

            <li class="menu single-menu">
                    <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">

                        <div>
                            <i class="fas fa-toolbox text-primary"></i>
                            <span class="text-primary">Administración</span>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                        <li>
                            <a href="{{ route('roles') }}"> Roles </a>
                        </li>

                        <li>
                            <a href="{{ route('permisos') }}"> Permisos </a>
                        </li>

                        <li>
                            <a href="{{ route('asignar.permisos') }}"> Asignar </a>
                        </li>

                        <li>
                            <a href="{{ route('usuarios') }}"> Usuarios </a>
                        </li>

                        <li>
                            <a href="{{ route('pacientes') }}"> Pacientes </a>
                        </li>

                        <li>
                            <a href="{{ route('modulos') }}"> Modulos </a>
                        </li>

                        <li>
                            <a href="{{ route('turnos') }}"> Turnos </a>
                        </li>

                        <li>
                            <a href=""> Horarios Personal </a>
                        </li>

                        <li>
                            <a href=""> Solicitud Permisos </a>
                        </li>
                </ul>
            </li>

            <li class="menu single-menu">
                    <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div>
                            <i class="fas fa-people-arrows text-primary"></i>
                            <span class="text-primary">Admision</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                        <li>
                            <a href="{{ route('generar.orden') }}"> Generar Tratamiento </a>
                        </li>

                        <li>
                            <a href=""> Historia Inicial </a>
                        </li>

                        <li>
                            <a href=""> Generar Referencia </a>
                        </li>

                </ul>
            </li>

            <li class="menu single-menu">
                    <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div>
                            <i class="fas fa-briefcase-medical text-primary"></i>
                            <span class="text-primary">Atenciones</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                        <li>
                            <a href="{{ route('atencion.medica') }}"> Medicina </a>
                        </li>

                        <li>
                            <a href=""> Enfermeria </a>
                        </li>

                </ul>
            </li>
        </ul>
    </nav>
</div>
