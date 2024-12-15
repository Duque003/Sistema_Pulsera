</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Datos</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/vendors/feather/feather.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugins:css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/mini-logo.png" />

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/images/favicon.png" />
    <style>
        .btn-active {
            background-color: #007bff !important;
            color: black !important;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="height: 70px;">
                <a class="navbar-brand brand-logo mr-5" href="/admin/dashboard">
                    <img src="/images/logo1.png" class="mr-2" alt="logo" style="height: 100%; width: auto;" /></a>
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
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
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
                                <p>Admin Picture not available</p>
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
            <div class="ml-2 mr-2 content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title mb-0">Tabla de datos</h4>
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

                                    <!-- Filtro por fecha -->
                                    <a id="buttonF" class="dropdown-item subbutton" href="#" onclick="toggleSubmenu('datePickerMenu', event)">Fecha</a>
                                    <div id="datePickerMenu" class="submenu" style="display: none; padding: 10px;">
                                        <div id="datepickerC">
                                            <input type="text" id="datepicker" class="form-control" />
                                        </div>
                                    </div>

                                    <!-- Filtro por frecuencia cardíaca -->
                                    <a id="buttonH" class="dropdown-item subbutton" href="#" onclick="toggleSubmenu('heartRateMenu', event)">Frecuencia Cardíaca</a>
                                    <div id="heartRateMenu" class="submenu" style="display: none; padding: 10px;">
                                        <button class="btn btn-sm btn-outline-primary mb-2" onclick="toggleOption('heartRateQuantity', event)">Cantidad</button>
                                        <div id="heartRateQuantity" class="options" style="display: none;">
                                            <input id="cantidadheart" type="text" class="form-control mb-2 inputs" placeholder="Ej. 75" onclick="toggleValue('cantidadheart', event)"/>
                                        </div>
                                        <button class="btn btn-sm btn-outline-primary mb-2" onclick="toggleOption('heartRateRange', event)">Rango</button>
                                        <div id="heartRateRange" class="options" style="display: none;">
                                            <input id="rangeminH" type="text" class="form-control mb-2 inputs" placeholder="Minimo" onclick="toggleValue('rangeminH', event)"/>
                                            <input id="rangemaxH" type="text" class="form-control mb-2 inputs" placeholder="Máximo" onclick="toggleValue('rangemaxH', event)"/>
                                        </div>
                                        <button class="btn btn-sm btn-outline-primary mb-2" onclick="toggleOption('heartRateMin', event)">Mínimo</button>
                                        <div id="heartRateMin" class="options" style="display: none;">
                                            <input id="minheart" type="text" class="form-control inputs" placeholder="Ej. 90" onclick="toggleValue('minheart', event)"/>
                                        </div>
                                        <button class="btn btn-sm btn-outline-primary mb-2" onclick="toggleOption('heartRateMax', event)">Máximo</button>
                                        <div id="heartRateMax" class="options" style="display: none;">
                                            <input id="maxheart" type="text" class="form-control inputs" placeholder="Ej. 90" onclick="toggleValue('maxheart', event)"/>
                                        </div>
                                    </div>

                                    <!-- Filtro por SpO₂ -->
                                    <a id="buttonS" class="dropdown-item subbutton" href="#" onclick="toggleSubmenu('spo2Menu', event)">SpO₂</a>
                                    <div id="spo2Menu" class="submenu" style="display: none; padding: 10px;">
                                        <button class="btn btn-sm btn-outline-primary mb-2" onclick="toggleOption('spo2Quantity', event)">Cantidad</button>
                                        <div id="spo2Quantity" class="options" style="display: none;">
                                            <input id="cantidadspo2" type="text" class="form-control mb-2 inputs" placeholder="Ej. 95" onclick="toggleValue('cantidadspo2', event)"/>
                                        </div>
                                        <button class="btn btn-sm btn-outline-primary mb-2" onclick="toggleOption('spo2Range', event)">Rango</button>
                                        <div id="spo2Range" class="options" style="display: none;">
                                            <input id="rangeminS" type="text" class="form-control mb-2 inputs" placeholder="Minimo" onclick="toggleValue('rangeminS', event)"/>
                                            <input id="rangemaxS" type="text" class="form-control mb-2 inputs" placeholder="Máximo" onclick="toggleValue('rangemaxS', event)"/>
                                        </div>
                                        <button class="btn btn-sm btn-outline-primary mb-2" onclick="toggleOption('spo2Min', event)">Mínimo</button>
                                        <div id="spo2Min" class="options" style="display: none;">
                                            <input id="minspo2" type="text" class="form-control inputs" placeholder="Ej. 90" onclick="toggleValue('minspo2', event)"/>
                                        </div>
                                        <button class="btn btn-sm btn-outline-primary mb-2" onclick="toggleOption('spo2Max', event)">Máximo</button>
                                        <div id="spo2Max" class="options" style="display: none;">
                                            <input id="maxspo2" type="text" class="form-control inputs" placeholder="Ej. 90" onclick="toggleValue('maxspo2', event)"/>
                                        </div>
                                    </div>

                                    <!-- Filtro por ubicación -->
                                    <a id="buttonU" class="dropdown-item subbutton" href="#" onclick="toggleSubmenu('locationMenu', event)">Ubicación</a>
                                    <div id="locationMenu" class="submenu" style="display: none; padding: 10px;">
                                        <a class="dropdown-item" href="#" data-filter="location:home">En casa</a>
                                        <a class="dropdown-item" href="#" data-filter="location:work">En el trabajo</a>
                                        <a class="dropdown-item" href="#" data-filter="location:other">Otros lugares</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="sensorDataTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Dispositivo</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Frecuencia Cardíaca</th>
                                    <th>SPO2</th>
                                    <th>Ubicación</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sensorData as $data)
                                    <tr>
                                        <td>{{ $data->nombre_dispositivo}}</td>
                                        <td>{{ $data->timestamp->format('d M Y') }}</td>
                                        <td>{{ $data->timestamp->format('H:i') }}</td>
                                        <td>{{ $data->heart_rate }} bpm</td>
                                        <td>{{ $data->spo2 }}%</td>
                                        <td>{{ $data->location }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

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

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var sensorData = @json($sensorData); // Pasamos los datos de sensor desde Blade a JavaScript
            var filteredData = [];
            console.log(sensorData); // Verifica que sensorData se esté pasando correctamente

        
            // Identificamos el menú principal usando su ID
            const menuButton = document.getElementById('datepickerButton'); // Botón que despliega el menú
            const menuContainer = document.getElementById('datepickerContainer'); // El contenedor del menú
            const submenus = document.querySelectorAll('.submenu');
            const subbuttons = document.querySelectorAll('.subbutton');
            const options = document.querySelectorAll('.options');
            const allButton = document.getElementById('AllButton');
            const inputs = document.querySelectorAll('.inputs');
            let inputValuemin = '';
            let inputValuemax = '';
            let inputfiltro;
            let inputunidad;

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

            // Función para limpiar todos los inputs
            function clearAllInputs() {
                inputs.forEach(inputs => {
                    inputs.value = '';
                });
            }

            // Función para ocultar todos los opciones
            function hideAllOptions() {
                options.forEach(options => {
                    options.style.display = 'none';
                });
            }

            // Cambiar cerrar todos los submenus al hacer click en "Todos"
            allButton.addEventListener('click', function (event) {
                event.stopPropagation();
                hideAllSubmenus();
                clearAllInputs();
                hideMenu()
                menuButton.classList.remove('btn-active');
                document.getElementById('selected').textContent = 'Todos';

                // Actualizar la tabla con todos los datos
                updateTable(sensorData);
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
                }else if(document.getElementById('selected').textContent.includes('Heart')){
                    console.log('Funciono');
                    clearAllButtons();
                    document.getElementById('buttonH').classList.add('btn-active')
                }else if(document.getElementById('selected').textContent.includes('SPO2')){
                    console.log('Funciono');
                    clearAllButtons();
                    document.getElementById('buttonS').classList.add('btn-active')
                }else if(document.getElementById('selected').textContent.includes('Fecha')){
                    console.log('Funciono');
                    clearAllButtons();
                    document.getElementById('buttonF').classList.add('btn-active')
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
                const submenu = document.getElementById(menuId);

                if (submenu.style.display === 'block') {
                    submenu.style.display = 'none'; // Ocultar si ya está visible
                } else {
                    hideAllSubmenus(); // Ocultar todos antes de mostrar el nuevo
                    hideAllOptions();
                    submenu.style.display = 'block';
                    if(submenu.id === 'heartRateMenu'){
                        inputfiltro = 'Heart Rate: ';
                        inputunidad = ' bpm';
                    } else if(submenu.id === 'spo2Menu'){
                        inputfiltro = 'SPO2 : ';
                        inputunidad = ' %';
                    }
                }
            };

            // Función para mostrar/ocultar un opcion específica
            window.toggleOption = function (optionId, event) {
                event.stopPropagation();  // Evita que el clic se propague y cierre el menú principal
                const option = document.getElementById(optionId);

                if (option.style.display === 'block') {
                    option.style.display = 'none'; // Ocultar si ya está visible
                } else {
                    hideAllOptions(); // Ocultar todos antes de mostrar el nuevo
                    option.style.display = 'block';
                }
            };
            
            // Función para mostrar/ocultar un opcion específica
            window.toggleValue = function (inputID, event) {
                event.stopPropagation();  // Evita que el clic se propague y cierre el menú principal
                const input = document.getElementById(inputID);
                console.log(input);

                if(input.id === 'rangeminH'){
                    event.stopPropagation();  // Evita que el clic se propague y cierre el menú principal
                    // Detecta cuando el usuario presiona una tecla
                    input.addEventListener('keydown', function (event) {
                        if (event.key === 'Enter') {
                            inputValuemin = input.value.trim(); // Captura el valor del input
                            console.log(inputValuemin); // Muestra el valor en la consola
                            console.log(inputValuemax); // Muestra el valor en la consola

                            if(!inputValuemax){
                                inputValuemax = document.getElementById('rangemaxH').value.trim();
                            }
                            console.log(inputValuemin); // Muestra el valor en la consola
                            console.log(inputValuemax); // Muestra el valor en la consola

                            if(inputValuemin && inputValuemax){
                                document.getElementById('selected').textContent = inputfiltro + inputValuemin + " - " + inputValuemax + inputunidad;
                                hideAllSubmenus(); // Ocultar submenús
                                hideMenu(); // Ocultar el menú principal
                                
                                // Filtrar los datos según la cantidad de maxima de spo2
                                filteredData = sensorData.filter(function(data) {
                                        return data.heart_rate >= parseInt(inputValuemin, 10) && data.heart_rate <= parseInt(inputValuemax, 10);
                                    });
                                // Mostrar los datos filtrados en la consola (o usarlo en la gráfica)
                                console.log(filteredData);

                                // Actualizar la tabla con los datos filtrados
                                updateTable(filteredData);

                                inputValuemin = '';
                                inputValuemax = '';
                                menuButton.classList.remove('btn-active');
                            }
                        }
                    });
                } else if(input.id === 'rangemaxH'){
                    event.stopPropagation();  // Evita que el clic se propague y cierre el menú principal
                    // Detecta cuando el usuario presiona una tecla
                    input.addEventListener('keydown', function (event) {
                        if (event.key === 'Enter') {
                            inputValuemax = input.value.trim(); // Captura el valor del input
                            console.log(inputValuemin); // Muestra el valor en la consola
                            console.log(inputValuemax); // Muestra el valor en la consola

                            if(!inputValuemin){
                                inputValuemin = document.getElementById('rangeminH').value.trim();
                            }
                            console.log(inputValuemin); // Muestra el valor en la consola
                            console.log(inputValuemax); // Muestra el valor en la consola

                            if(inputValuemin && inputValuemax){
                                document.getElementById('selected').textContent = inputfiltro + inputValuemin + " - " + inputValuemax + inputunidad; // Muestra el valor en el contenedor
                                hideAllSubmenus(); // Ocultar submenús
                                hideMenu(); // Ocultar el menú principal
                                clearAllInputs(); //Ocultar las opciones
                                
                                // Filtrar los datos según la cantidad de maxima de spo2
                                filteredData = sensorData.filter(function(data) {
                                        return data.heart_rate >= parseInt(inputValuemin, 10) && data.heart_rate <= parseInt(inputValuemax, 10);
                                    });
                                // Mostrar los datos filtrados en la consola (o usarlo en la gráfica)
                                console.log(filteredData);

                                // Actualizar la tabla con los datos filtrados
                                updateTable(filteredData);

                                inputValuemin = '';
                                inputValuemax = '';
                                menuButton.classList.remove('btn-active');
                            }
                        }
                    });
                }else if(input.id === 'rangeminS'){
                    // Detecta cuando el usuario presiona una tecla
                    input.addEventListener('keydown', function (event) {
                        if (event.key === 'Enter') {
                            inputValuemin = input.value.trim(); // Captura el valor del input
                            console.log(inputValuemin); // Muestra el valor en la consola
                            console.log(inputValuemax); // Muestra el valor en la consola

                            if(!inputValuemax){
                                inputValuemax = document.getElementById('rangemaxS').value.trim();
                            }

                            if(inputValuemin && inputValuemax){
                                document.getElementById('selected').textContent = inputfiltro + inputValuemin + " - " + inputValuemax + inputunidad; // Muestra el valor en el contenedor
                                hideAllSubmenus(); // Ocultar submenús
                                hideMenu(); // Ocultar el menú principal
                                clearAllInputs(); //Ocultar las opciones

                                // Filtrar los datos según la cantidad de maxima de spo2
                                filteredData = sensorData.filter(function(data) {
                                        return data.spo2 >= parseInt(inputValuemin, 10) && data.spo2 <= parseInt(inputValuemax, 10);
                                    });
                                // Mostrar los datos filtrados en la consola (o usarlo en la gráfica)
                                console.log(filteredData);

                                // Actualizar la tabla con los datos filtrados
                                updateTable(filteredData);

                                inputValuemin = '';
                                inputValuemax = '';
                                menuButton.classList.remove('btn-active');
                            }
                        }
                    });
                }else if(input.id === 'rangemaxS'){
                    // Detecta cuando el usuario presiona una tecla
                    input.addEventListener('keydown', function (event) {
                        if (event.key === 'Enter') {
                            inputValuemax = input.value.trim(); // Captura el valor del input
                            console.log(inputValuemin); // Muestra el valor en la consola
                            console.log(inputValuemax); // Muestra el valor en la consola

                            if(!inputValuemin){
                                inputValuemin = document.getElementById('rangeminS').value.trim();
                            }

                            if(inputValuemin && inputValuemax){
                                document.getElementById('selected').textContent = inputfiltro + inputValuemin + " - " + inputValuemax + inputunidad; // Muestra el valor en el contenedor
                                hideAllSubmenus(); // Ocultar submenús
                                hideMenu(); // Ocultar el menú principal
                                clearAllInputs(); //Ocultar las opciones

                                // Filtrar los datos según la cantidad de maxima de spo2
                                filteredData = sensorData.filter(function(data) {
                                        return data.spo2 >= parseInt(inputValuemin, 10) && data.spo2 <= parseInt(inputValuemax, 10);
                                    });
                                // Mostrar los datos filtrados en la consola (o usarlo en la gráfica)
                                console.log(filteredData);

                                // Actualizar la tabla con los datos filtrados
                                updateTable(filteredData);

                                inputValuemin = '';
                                inputValuemax = '';
                                menuButton.classList.remove('btn-active');
                            }
                        }
                    });
                } else if(input.id === 'minheart'){
                    // Detecta cuando el usuario presiona una tecla
                    input.addEventListener('keydown', function (event) {
                        if (event.key === 'Enter') {
                            const inputValue = input.value.trim(); // Captura el valor del input
                            console.log(inputValue); // Muestra el valor en la consola
                        
                            if (inputValue) {
                                document.getElementById('selected').textContent = inputfiltro + '>' + inputValue + inputunidad; // Muestra el valor en el contenedor
                                hideAllSubmenus(); // Ocultar submenús
                                hideMenu(); // Ocultar el menú principal
                                clearAllInputs(); //Ocultar las opciones
                                menuButton.classList.remove('btn-active');

                                // Filtrar los datos según la cantidad de maxima de spo2
                                filteredData = sensorData.filter(function(data) {
                                        return data.heart_rate >= parseInt(inputValue, 10);
                                    });
                                // Mostrar los datos filtrados en la consola (o usarlo en la gráfica)
                                console.log(filteredData);

                                // Actualizar la tabla con los datos filtrados
                                updateTable(filteredData);
                            }
                        }
                    });
                } else if(input.id === 'maxheart'){
                    // Detecta cuando el usuario presiona una tecla
                    input.addEventListener('keydown', function (event) {
                        if (event.key === 'Enter') {
                            const inputValue = input.value.trim(); // Captura el valor del input
                            console.log(inputValue); // Muestra el valor en la consola
                        
                            if (inputValue) {
                                document.getElementById('selected').textContent = inputfiltro + '<' + inputValue + inputunidad; // Muestra el valor en el contenedor
                                hideAllSubmenus(); // Ocultar submenús
                                hideMenu(); // Ocultar el menú principal
                                clearAllInputs(); //Ocultar las opciones
                                menuButton.classList.remove('btn-active');

                                // Filtrar los datos según la cantidad de maxima de spo2
                                filteredData = sensorData.filter(function(data) {
                                        return data.heart_rate <= parseInt(inputValue, 10);
                                    });
                                // Mostrar los datos filtrados en la consola (o usarlo en la gráfica)
                                console.log(filteredData);

                                // Actualizar la tabla con los datos filtrados
                                updateTable(filteredData);
                            }
                        }
                    });
                } else if(input.id === 'minspo2'){
                    // Detecta cuando el usuario presiona una tecla
                    input.addEventListener('keydown', function (event) {
                        if (event.key === 'Enter') {
                            const inputValue = input.value.trim(); // Captura el valor del input
                            console.log(inputValue); // Muestra el valor en la consola
                        
                            if (inputValue) {
                                document.getElementById('selected').textContent = inputfiltro + '>' + inputValue + inputunidad; // Muestra el valor en el contenedor
                                hideAllSubmenus(); // Ocultar submenús
                                hideMenu(); // Ocultar el menú principal
                                clearAllInputs(); //Ocultar las opciones
                                menuButton.classList.remove('btn-active');

                                // Filtrar los datos según la cantidad de maxima de spo2
                                filteredData = sensorData.filter(function(data) {
                                        return data.spo2 >= parseInt(inputValue, 10);
                                    });
                                // Mostrar los datos filtrados en la consola (o usarlo en la gráfica)
                                console.log(filteredData);

                                // Actualizar la tabla con los datos filtrados
                                updateTable(filteredData);
                            }
                        }
                    });
                } else if(input.id === 'maxspo2'){
                    // Detecta cuando el usuario presiona una tecla
                    input.addEventListener('keydown', function (event) {
                        if (event.key === 'Enter') {
                            const inputValue = input.value.trim(); // Captura el valor del input
                            console.log(inputValue); // Muestra el valor en la consola
                        
                            if (inputValue) {
                                document.getElementById('selected').textContent = inputfiltro + '<' + inputValue + inputunidad; // Muestra el valor en el contenedor
                                hideAllSubmenus(); // Ocultar submenús
                                hideMenu(); // Ocultar el menú principal
                                clearAllInputs(); //Ocultar las opciones
                                menuButton.classList.remove('btn-active');

                                // Filtrar los datos según la cantidad de maxima de spo2
                                filteredData = sensorData.filter(function(data) {
                                        return data.spo2 <= parseInt(inputValue, 10);
                                    });
                                // Mostrar los datos filtrados en la consola (o usarlo en la gráfica)
                                console.log(filteredData);
                            
                                // Actualizar la tabla con los datos filtrados
                                updateTable(filteredData);
                            }
                        }
                    });
                } else{
                    // Detecta cuando el usuario presiona una tecla
                    input.addEventListener('keydown', function (event) {
                        if (event.key === 'Enter') {
                            const inputValue = input.value.trim(); // Captura el valor del input
                            console.log(inputValue); // Muestra el valor en la consola
                        
                            if (inputValue) {
                                document.getElementById('selected').textContent = inputfiltro + inputValue + inputunidad; // Muestra el valor en el contenedor
                                hideAllSubmenus(); // Ocultar submenús
                                hideMenu(); // Ocultar el menú principal
                                clearAllInputs(); //Ocultar las opciones
                                menuButton.classList.remove('btn-active');
                                if(input.id === 'cantidadheart'){
                                    // Filtrar los datos según la cantidad de bpm
                                    filteredData = sensorData.filter(function(data) {
                                        return data.heart_rate === parseInt(inputValue, 10); // Compara solo la fecha (sin la hora)
                                    });
                                    // Mostrar los datos filtrados en la consola (o usarlo en la gráfica)
                                    console.log(filteredData);
                                
                                    // Actualizar la tabla con los datos filtrados
                                    updateTable(filteredData);
                                }else {
                                    // Filtrar los datos según la cantidad de bpm
                                    filteredData = sensorData.filter(function(data) {
                                        return data.spo2 === parseInt(inputValue, 10); // Compara solo la fecha (sin la hora)
                                    });
                                    // Mostrar los datos filtrados en la consola (o usarlo en la gráfica)
                                    console.log(filteredData);
                                
                                    // Actualizar la tabla con los datos filtrados
                                    updateTable(filteredData);
                                }
                                
                            }
                        }
                    });
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
                    clearAllInputs();
                    menuButton.classList.remove('btn-active');
                    inputs.forEach(input => {
                        if(document.getElementById('selected').textContent === 'Todos'){
                                clearAllButtons();
                                document.getElementById('AllButton').classList.add('btn-active');
                        }else if(document.getElementById('selected').textContent.includes('Heart')){
                                console.log('Funciono');
                                    clearAllButtons();
                                    document.getElementById('buttonH').classList.add('btn-active')
                        }else if(document.getElementById('selected').textContent.includes('SPO2')){
                                console.log('Funciono');
                                    clearAllButtons();
                                    document.getElementById('buttonS').classList.add('btn-active')
                        }else if(document.getElementById('selected').textContent.includes('Fecha')){
                                console.log('Funciono');
                                    clearAllButtons();
                                    document.getElementById('buttonF').classList.add('btn-active')
                        }
                    });
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
                    menuButton.classList.remove('btn-active');

                    // Formatear la fecha seleccionada a Y-m-d (año-mes-día)
                    var formattedDate = instance.formatDate(selectedDates[0], "Y-m-d");
                    console.log('Fecha seleccionada: ' + selectedDates);

                    // Filtrar los datos según la fecha seleccionada
                    filteredData = sensorData.filter(function(data) {
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
                        <td>${formatDate(item.created_at)}</td> <!-- Fecha formateada -->
                        <td>${item.created_at.split(' ')[1].substring(0, 5)}</td>
                        <td>${item.heart_rate} bpm</td>
                        <td>${item.spo2}%</td>
                        <td>${item.location}</td>
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
</body>

</html>