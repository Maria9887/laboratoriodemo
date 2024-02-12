<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
          <img src="{{ asset('images/favicon/favicon.png') }}" alt="..." height="50px">
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="credits.html"><i class="fas fa-th-large"></i> <span>Dashboard</span></a></li>

            </li>
            <li class="menu-header">Interface</li>
            <li class="dropdown">
              <a href="{{ url('/medicos')}}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-md"></i> <span>Médico</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ url('index')}}">Agregar Médico</a></li>
                <li><a class="nav-link" href="#">Lista de Médicos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-procedures"></i> <span>Pacientes</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">Agregar paciente</a></li>
                <li><a class="nav-link" href="#">Lista de Pacientes</a></li>
                <li><a class="nav-link" href="#">Pagos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-calendar-plus"></i> <span>Citas</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">Todas</a></li>
                <li><a class="nav-link" href="#">Añadir</a></li>
                <li><a class="nav-link" href="#">Hoy</a></li>
                <li><a class="nav-link" href="#">Próximo</a></li>
                <li><a class="nav-link" href="#">Calendario</a></li>
                <li><a class="nav-link" href="#">Solicitud</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-check"></i> <span>Recursos Humanos</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">Enfermera</a></li>
                <li><a class="nav-link" href="#">Laboratorista</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-vials"></i> <span>Pruebas de Laboratorio</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">Informes de Laboratorio</a></li>
                <li><a class="nav-link" href="#">Agregar Informe</a></li>
                <li><a class="nav-link" href="#">Reporte de Laboratorio</a></li>
              </ul>
            </li>
            
            <li class="menu-header">Usuarios</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Perfil</span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Agregar Usuario</a></li> 
              </ul>
            </li>
            
            </li>
          
          </ul>

            </aside>
      </div>
