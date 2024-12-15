</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Menú Principal</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/vendors/feather/feather.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/images/logo-mini.png" />
    <style>
        .card-light-green {
            background-color: rgb(144, 238, 144); /* RGB para un verde claro */
        }
    </style>
    <style>
        .btn-active {
            background-color: #007bff !important;
            color: black !important;
        }
    </style>
    <style>
        .table-tamaño {
            max-height: 400px;  /* Altura máxima para la tabla */
            overflow-y: auto;   /* Habilita el desplazamiento vertical */
        }
    </style>

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="height: 70px;">
                <a class="navbar-brand brand-logo mr-5" href="/admin/dashboard">
                    <img src="/images/logo1.png" class="mr-2" alt="logo" style="height: 100%; width: auto;"/></a>
                <a class="navbar-brand brand-logo-mini" href="/admin/dashboard">
                    <img src="/images/logo-mini.png" alt="logo" style="height: 100%; width: 80;"/></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notificaciones</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="ti-user mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            @if ($LoggedAdminInfo->picture)

                            <img src="{{ asset('storage/' . $LoggedAdminInfo->picture) }}">

                            @else
                            <img src="/storage/pictures_pre/user0.jpg">
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="ti-power-off text-primary"></i>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                            href="{{ route('admin.dashboard') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('admin.profile') ? 'active' : '' }}"
                            href="{{ route('admin.profile') }}">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/datos*') ? 'active' : '' }}" data-toggle="collapse" 
                            href="#form-elements-datos" aria-expanded="false" aria-controls="form-elements-datos">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">Datos</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse {{ request()->is('admin/datos*') ? 'show' : '' }}" id="form-elements-datos">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link {{ request()->is('admin/datos') ? 'active' : '' }}" href="{{ route('admin.datos') }}">Tabla de datos</a></li>
                                <!-- Add more sub-menu items if needed -->
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/contactos*') ? 'active' : '' }}" data-toggle="collapse"
                            href="#form-elements-contactos" aria-expanded="false" aria-controls="form-elements-contactos">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">Contactos</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse {{ request()->is('admin/contactos*') ? 'show' : '' }}" id="form-elements-contactos">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ request()->is('admin/contactos') ? 'active' : '' }}"
                                        href="{{ route('admin.contactos') }}">Contactos de Emergencia</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/dispositivo*') ? 'active' : '' }}" data-toggle="collapse"
                            href="#form-elements-dispositivos" aria-expanded="false" aria-controls="form-elements-contactos">
                            <i class="icon-link menu-icon"></i>
                            <span class="menu-title">Dispositivos</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse {{ request()->is('admin/dispositivo*') ? 'show' : '' }}" id="form-elements-dispositivos">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ request()->is('admin/dispositivo') ? 'active' : '' }}"
                                        href="{{ route('admin.dispositivo') }}">Tabla de Dispositivos</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">
                                        Bienvenido
                                        @if (session('LoggedAdminInfo'))
                                        {{ $LoggedAdminInfo->name }}
                                        <!-- Add more user information as needed -->
                                        @else
                                        <p>Access denied. Please <a href="{{ route('admin.login') }}">login</a> to view
                                            this page.</p>
                                        @endif
                                    </h3>

                                </div>
                                <div class="col-12 col-xl-4">
                                    <div class="justify-content-end d-flex">
                                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                            <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="Calenderbutton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="mdi mdi-calendar"></i> <span id="DateSelected">Today ({{ date('d M Y') }})</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right menu" id="ContenedorCalender" style="display:none; position:absolute; background:white; 
                                                box-shadow:0 2px 8px rgba(0,0,0,0.2); z-index:1000; padding:10px; border-radius:5px;" aria-labelledby="Calenderbutton">
                                                <!-- Aquí se cargará el calendario -->
                                                <input type="text" id="Calender" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 grid-margin transparent">
                        <div class="row">
                            <!-- Tarjeta de la gráfica de Frecuencia Cardíaca -->
                            <div class="col-md-6 stretch-card transparent">
                                <div class="card card-tale">
                                    <div class="card-body">
                                        <h4 class="mb-4 text-center">Frecuencia Cardíaca (Heart Rate)</h4>
                                        <canvas id="heartRateChart" style="height: 400px; width: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Tarjeta de la gráfica de Saturación de Oxígeno -->
                            <div class="col-md-6 stretch-card transparent">
                                <div class="card card-light-green ">
                                    <div class="card-body">
                                        <h4 class="mb-4 text-center">Saturación de Oxígeno (SpO2)</h4>
                                        <canvas id="spo2Chart" style="height: 400px; width: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title mb-0">Alarmas</p>
                                    <div class="justify-content-end d-flex">
                                        <span class="font-weight-bold btn btn-sm btn-light bg-white disabled" style="pointer-events: none;">Filtrar:</span>
                                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                            <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="datepickerButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="mdi mdi-calendar"></i> <span id="selected">Todos</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right menu" id="datepickerContainer" style="display: none; position:absolute; background:white; 
                                                box-shadow:0 2px 8px rgba(0,0,0,0.2); z-index:1000; padding:10px; border-radius:5px;" aria-labelledby="datepickerButton">

                                                <!-- Muestra todo-->
                                                <a class="dropdown-item subbutton btn-active" href="#" id="AllButton">Todos</a>

                                                <!-- Filtro por Problema -->
                                                <a id="buttonP" class="dropdown-item subbutton" href="#" onclick="toggleSubmenu('ProblemMenu', event)">Problema</a>
                                                <div id="ProblemMenu" class="submenu" style="display: none; padding: 10px;">
                                                    <a class="dropdown-item option" href="#" id="Desmayo" onclick="toggleOption('Desmayo', event)">Desmayo</a>
                                                    <a class="dropdown-item option" href="#" id="RCB" onclick="toggleOption('RCB', event)">Ritmo cardíaco Bajo</a>
                                                    <a class="dropdown-item option" href="#" id="RCA" onclick="toggleOption('RCA', event)">Ritmo cardíaco Alto</a>
                                                </div>

                                                <!-- Filtro por fecha -->
                                                <a id="buttonF" class="dropdown-item subbutton" href="#" onclick="toggleSubmenu('datePickerMenu', event)">Fecha</a>
                                                <div id="datePickerMenu" class="submenu" style="display: none; padding: 10px;">
                                                    <div id="datepickerC">
                                                        <input type="text" id="datepicker" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-tamaño">
                                        <table class="table table-striped table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Despositivo</th>
                                                    <th>Problema</th>
                                                    <th>Fecha</th>
                                                    <th>Hora</th>
                                                    <th>Ubicación</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($alarmas as $data)
                                                    <tr>
                                                        <td>{{ $data->nombre_dispositivo}}</td>
                                                        <td>{{ $data->problema }}</td>
                                                        <td>{{ $data->timestamp->format('d M Y') }}</td>
                                                        <td>{{ $data->timestamp->format('H:i') }}</td>
                                                        <td>{{ $data->ubicacion }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Contactos de Emergencia</p>
                                    <ul class="icon-data-list">
                                    @foreach ($contactos as $datos)
                                        <li>
                                            <div class="d-flex">
                                            <img src="https://ui-avatars.com/api/?name={{ urlencode($datos->nombre) }}&size=128" alt="{{ $datos->nombre }}">
                                                <div>
                                                    <p class="text-info mb-1">{{ $datos->nombre }}</p> <!-- Nombre del contacto -->
                                                    <p class="mb-0">{{ $datos->numero }}</p> <!-- Parentesco -->
                                                    <small>{{ $datos->parentesco }}</small> <!-- Número de teléfono -->
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                            Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin
                                template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a
                                href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/vendors/chart.js/Chart.min.js"></script>
    <script src="/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/js/off-canvas.js"></script>
    <script src="/js/hoverable-collapse.js"></script>
    <script src="/js/template.js"></script>
    <script src="/js/settings.js"></script>
    <script src="/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/js/dashboard.js"></script>
    <script src="/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var alarmas = @json($alarmas); // Pasamos los datos de sensor desde Blade a JavaScript
            var filteredData = [];
            console.log(alarmas); // Verifica que sensorData se esté pasando correctamente

        
            // Identificamos el menú principal usando su ID
            const menuButton = document.getElementById('datepickerButton'); // Botón que despliega el menú
            const menuContainer = document.getElementById('datepickerContainer'); // El contenedor del menú
            const submenus = document.querySelectorAll('.submenu');
            const subbuttons = document.querySelectorAll('.subbutton');
            const options = document.querySelectorAll('.option');
            const allButton = document.getElementById('AllButton');
    
            // Función para ocultar todos los submenús
            function hideAllSubmenus() {
                submenus.forEach(submenu => {
                    submenu.style.display = 'none';
                });
            }

            // Función para limpiar todos los sub botones
            function clearAllButtons() {
                subbuttons.forEach(subbuttons => {
                    subbuttons.classList.remove('btn-active');
                });
            }

            // Función para limpiar todos los botones de opciones
            function clearAllOButtons() {
                options.forEach(options => {
                    options.classList.remove('btn-active');
                });
            }

            // Cambiar cerrar todos los submenus al hacer click en "Todos"
            allButton.addEventListener('click', function (event) {
                event.preventDefault(); // Evita que el enlace recargue la página
                event.stopPropagation();
                hideAllSubmenus();
                hideMenu()
                clearAllOButtons();
                menuButton.classList.remove('btn-active');
                document.getElementById('selected').textContent = 'Todos';

                // Actualizar la tabla con todos los datos
                updateTable(alarmas);
            });

            // Cambiar el estilo de visibilidad del menú al hacer clic
            menuButton.addEventListener('click', function (event) {
                event.stopPropagation();
                const isVisible = menuContainer.style.display === 'block';
                menuButton.classList.toggle('btn-active');
                console.log(menuButton);
                menuContainer.style.display = isVisible ? 'none' : 'block';
                if (!isVisible) {
                    hideAllSubmenus();
                }
                if(document.getElementById('selected').textContent === 'Todos'){
                        clearAllButtons();
                        document.getElementById('AllButton').classList.add('btn-active');
                    }else if(document.getElementById('selected').textContent.includes('Bajo')){
                        console.log('Funciono');
                        clearAllButtons();
                        document.getElementById('buttonP').classList.add('btn-active');
                    }else if(document.getElementById('selected').textContent.includes('Alto')){
                        console.log('Funciono');
                        clearAllButtons();
                        document.getElementById('buttonP').classList.add('btn-active');
                    }else if(document.getElementById('selected').textContent.includes('Fecha')){
                        console.log('Funciono');
                        clearAllButtons();
                        document.getElementById('buttonF').classList.add('btn-active');
                    }else if(document.getElementById('selected').textContent.includes('Desmayo')){
                        console.log('Funciono');
                        clearAllButtons();
                        document.getElementById('buttonP').classList.add('btn-active');
                    }
            });

            // Función para ocultar el menú principal
            function hideMenu() {
                if (menuContainer) {
                    menuContainer.style.display = 'none';
                }
            }

            subbuttons.forEach(button => {
                button.addEventListener('click', function () {
                    // Elimina la clase 'btn-active' de todos los botones
                    clearAllButtons();
                
                    // Añade la clase 'btn-active' solo al botón presionado
                    button.classList.add('btn-active');
                });
            });
                        
            // Función para mostrar/ocultar un submenú específico
            window.toggleSubmenu = function (menuId, event) {
                event.stopPropagation();  // Evita que el clic se propague y cierre el menú principal
                event.preventDefault(); // Evita que el enlace recargue la página
                const submenu = document.getElementById(menuId);

                if (submenu.style.display === 'block') {
                    submenu.style.display = 'none'; // Ocultar si ya está visible
                } else {
                    hideAllSubmenus(); // Ocultar todos antes de mostrar el nuevo
                    submenu.style.display = 'block';
                }
            };

            // Función para mostrar/ocultar un opcion específica
            window.toggleOption = function (optionId, event) {
                event.preventDefault(); // Evita que el enlace recargue la página
                event.stopPropagation();  // Evita que el clic se propague y cierre el menú principal
                const option = document.getElementById(optionId);
                clearAllOButtons();
                option.classList.add('btn-active');
                hideMenu();
                menuButton.classList.remove('btn-active');
                document.getElementById('selected').textContent = option.textContent;
                
                if(option.id === 'Desmayo'){
                    // Filtrar los datos según el problema
                    filteredData = alarmas.filter(function(data) {
                        return data.problema === option.id;
                    });
                    console.log(filteredData);
                    updateTable(filteredData);
                }else if(option.id === 'RCB'){
                    // Filtrar los datos según el problema
                    filteredData = alarmas.filter(function(data) {
                        return data.problema === 'Ritmo Cardíaco Bajo';
                    });
                    console.log(filteredData);
                    updateTable(filteredData);
                }else{
                    // Filtrar los datos según el problema
                    filteredData = alarmas.filter(function(data) {
                        return data.problema === 'Ritmo Cardíaco Alto';
                    });
                    console.log(filteredData);
                    updateTable(filteredData);
                }
            };

            // Ocultar submenús al hacer clic fuera de ellos
            document.addEventListener('click', function (event) {
                event.stopPropagation();
                const isInsideMenu = event.target.closest('.submenu') || event.target.closest('.dropdown-item');
                const isInsideMainMenu = event.target.closest('#datepickerContainer') || event.target.closest('#datepickerButton'); // Verificar si el clic es dentro del menú principal

                console.log(isInsideMainMenu);
                if (!isInsideMenu) {
                    hideAllSubmenus(); // Ocultar submenús
                    hideMenu(); // Ocultar el menú principal
                    menuButton.classList.remove('btn-active');
                    if(document.getElementById('selected').textContent === 'Todos'){
                        clearAllButtons();
                        document.getElementById('AllButton').classList.add('btn-active');
                    }else if(document.getElementById('selected').textContent.includes('Bajo')){
                        console.log('Funciono');
                        clearAllButtons();
                        document.getElementById('buttonP').classList.add('btn-active');
                    }else if(document.getElementById('selected').textContent.includes('Alto')){
                        console.log('Funciono');
                        clearAllButtons();
                        document.getElementById('buttonP').classList.add('btn-active');
                    }else if(document.getElementById('selected').textContent.includes('Fecha')){
                        console.log('Funciono');
                        clearAllButtons();
                        document.getElementById('buttonF').classList.add('btn-active');
                    }else if(document.getElementById('selected').textContent.includes('Desmayo')){
                        console.log('Funciono');
                        clearAllButtons();
                        document.getElementById('buttonP').classList.add('btn-active');
                    }
                }
            });
        
            // Inicializar el calendario
            flatpickr("#datepicker", {
                dateFormat: "d M Y", // Formato de la fecha
                altInput: true, // Muestra una entrada alternativa para el valor (si usas un input)
                altFormat: "d M Y", // Formato de la fecha visible al usuario
                defaultDate: "today", // Fecha por defecto
                inline: true, // Mostrar el calendario dentro del contenedor
                enableTime: false, // Desactivar la selección de hora
                locale: "es", // Idioma español
                onChange: function (selectedDates, dateStr, instance) {
                    // Actualizar el texto del botón con la fecha seleccionada
                    document.getElementById('selected').textContent = `Fecha: ${dateStr}`;

                    //Ocultamos el menu principal y el submenu
                    hideMenu();
                    hideAllSubmenus();
                    clearAllOButtons();
                    menuButton.classList.remove('btn-active');

                    // Formatear la fecha seleccionada a Y-m-d (año-mes-día)
                    var formattedDate = instance.formatDate(selectedDates[0], "Y-m-d");
                    console.log('Fecha seleccionada: ' + selectedDates);

                    // Filtrar los datos según la fecha seleccionada
                    filteredData = alarmas.filter(function(data) {
                        return data.created_at.split(' ')[0] === formattedDate; // Compara solo la fecha (sin la hora)
                    });
                    // Mostrar los datos filtrados en la consola (o usarlo en la gráfica)
                    console.log(filteredData);

                    // Actualizar la tabla con los datos filtrados
                    updateTable(filteredData);
                }
            });

            // Función para actualizar la tabla con los datos filtrados
            function updateTable(data) {
                var tableBody = document.querySelector('tbody');
                tableBody.innerHTML = ''; // Limpiar la tabla actual
            
                data.forEach(function(item) {
                    var row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${item.problema }</td>
                        <td>${formatDate(item.created_at)}</td> <!-- Fecha formateada -->
                        <td>${item.created_at.split(' ')[1].substring(0, 5)}</td>
                        <td>${item.ubicacion }</td>
                    `;
                    tableBody.appendChild(row);
                });
            }

            // Función para formatear la fecha
            function formatDate(dateString) {
                const date = new Date(dateString); // Convertir el string en un objeto Date
                const options = { year: 'numeric', month: 'short', day: '2-digit' }; // Opciones para el formato
                formattedDate = date.toLocaleDateString('es-ES', options); // Formatear con el local 'es-ES' para mostrar el mes en español
                
                // Cambiar la primera letra del mes a mayúscula
                return formattedDate.replace(/\b\w/g, (char) => char.toUpperCase()); 
            }
        });
    </script>
    <script>
        const ContainerMenu = document.getElementById('ContenedorCalender'); // El contenedor del menú
        let heartRateChart, spo2Chart; // Declarar las variables globalmente

        var sensorData = @json($sensorData); // Pasamos los datos de sensor desde Blade a JavaScript
        var DateSelected = '{{ $DateSelected ?? now()->format('Y-m-d') }}'; // Fecha seleccionada, por defecto hoy

        // Filtrar los datos según la fecha seleccionada
        var filteredData = sensorData.filter(function(data) {
            return data.created_at.split(' ')[0] === DateSelected; // Compara solo la fecha (sin la hora)
        });

        // Función para ocultar el menú principal
        function hideMenu() {
                if (ContainerMenu) {
                    ContainerMenu.style.display = 'none';
                }
        }

        // Mostrar los datos filtrados en la consola (o usarlo en la gráfica)
        console.log(filteredData);
        
        document.addEventListener('DOMContentLoaded', function () {
            // Inicializar el calendario
            flatpickr("#Calender", {
                dateFormat: "d M Y", // Formato de la fecha
                altInput: true, // Muestra una entrada alternativa para el valor (si usas un input)
                altFormat: "d M Y", // Formato de la fecha visible al usuario
                defaultDate: "today", // Fecha por defecto
                inline: true, // Mostrar el calendario dentro del contenedor
                enableTime: false, // Desactivar la selección de hora
                locale: "es", // Idioma español
                onChange: function (selectedDates, dateStr, instance) {
                    // Actualizar el texto del botón con la fecha seleccionada
                    document.getElementById('DateSelected').textContent = `${dateStr}`;

                    hideMenu(); //Oculta el calendario cuando se selecciona una fecha

                    // Formatear la fecha seleccionada a Y-m-d (año-mes-día)
                    var formattedDate = instance.formatDate(selectedDates[0], "Y-m-d");
                    console.log(formattedDate);
                    // Filtrar los datos según la fecha seleccionada
                    var filteredData = sensorData.filter(function(data) {
                        return data.created_at.split(' ')[0] === formattedDate; // Compara solo la fecha (sin la hora)
                    });
                    // Mostrar los datos filtrados en la consola (o usarlo en la gráfica)
                    console.log(filteredData);
                    
                    // Asumimos que ya tienes las variables heartRateData y spo2Data para la gráfica
                    heartRateData = filteredData.map(function(data) {
                        return data.heart_rate; // Actualiza los datos de frecuencia cardíaca
                    });
                
                    spo2Data = filteredData.map(function(data) {
                        return data.spo2; // Actualiza los datos de SPO2
                    });
                
                    // Actualizar las etiquetas (horas) para la gráfica
                    labels = filteredData.map(function(data) {
                        return data.created_at.split(' ')[1].substring(0, 5); // Obtén solo la hora para las etiquetas
                    });
                
                    // Actualizar los datos de la gráfica de Frecuencia Cardíaca
                    heartRateChart.data.labels = labels;
                    heartRateChart.data.datasets[0].data = heartRateData;
                    heartRateChart.update();
                            
                    // Actualizar los datos de la gráfica de Saturación de Oxígeno
                    spo2Chart.data.labels = labels;
                    spo2Chart.data.datasets[0].data = spo2Data;
                    spo2Chart.update();
                }
            });

            // Mostrar el calendario al hacer clic en el botón
            document.getElementById('Calenderbutton').addEventListener('click', function() {
                var calendar = document.getElementById('ContenedorCalender');
                calendar.style.display = (calendar.style.display === 'none' || calendar.style.display === '') ? 'block' : 'none';
            });

            // Ocultar submenús al hacer clic fuera de ellos
            document.addEventListener('click', function (event) {
                const isInsideMainMenu = event.target.closest('.dropdown-menu') || event.target.closest('#Calenderbutton'); // Verificar si el clic es dentro del menú principal

                if (!isInsideMainMenu) {
                    hideMenu(); // Ocultar el menú principal
                }
            });
        });

        // Inicializar los arrays vacíos para los datos
        var heartRateData = [];
        var spo2Data = [];
        var labels = [];

        console.log(heartRateData);
        console.log(spo2Data);
        console.log(labels);

        // Recorrer los datos del sensor y agregar a los arrays
        filteredData.forEach(function(data) {
            heartRateData.push(data.heart_rate); // Frecuencia cardíaca
            spo2Data.push(data.spo2); // SpO2
            labels.push(data.created_at.split(' ')[1].substring(0, 5)); // Etiquetas con la hora (HH:mm)
        });

        // Configuración de la gráfica de Frecuencia Cardíaca
        const ctx1 = document.getElementById('heartRateChart').getContext('2d');
        heartRateChart = new Chart(ctx1, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Frecuencia Cardíaca (bpm)',
                    data: heartRateData,
                    borderColor: 'red',
                    backgroundColor: 'rgba(255, 0, 0, 0.2)',
                    borderWidth: 2,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: true } },
                scales: { y: { beginAtZero: false } }
            }
        });

        // Configuración de la gráfica de Saturación de Oxígeno
        const ctx2 = document.getElementById('spo2Chart').getContext('2d');
        spo2Chart = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Saturación de Oxígeno (%)',
                    data: spo2Data,
                    borderColor: 'black',
                    backgroundColor: 'rgba(200, 20, 150, 0.2)',
                    borderWidth: 2,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: true } },
                scales: { y: { beginAtZero: false } }
            }
        });
    </script>
</body>

</html>