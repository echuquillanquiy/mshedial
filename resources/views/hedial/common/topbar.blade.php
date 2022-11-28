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
                            <a href=""> Roles </a>
                        </li>

                        <li>
                            <a href=""> Permisos </a>
                        </li>

                        <li>
                            <a href=""> Asignar </a>
                        </li>

                        <li>
                            <a href=""> Usuarios </a>
                        </li>

                        <li>
                            <a href="{{ route('pacientes') }}"> Pacientes </a>
                        </li>

                        <li>
                            <a href="{{ route('modulos') }}"> Modulos </a>
                        </li>

                        <li>
                            <a href=""> Turnos </a>
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
                            <span class="text-primary">Admisión</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                        <li>
                            <a href=""> Pacientes </a>
                        </li>

                        <li>
                            <a href=""> Ordenes </a>
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
                            <a href=""> Medicina </a>
                        </li>

                        <li>
                            <a href=""> Laboratorio </a>
                        </li>

                        <li>
                            <a href=""> Auditoria </a>
                        </li>

                </ul>
            </li>
        </ul>
    </nav>
</div>
