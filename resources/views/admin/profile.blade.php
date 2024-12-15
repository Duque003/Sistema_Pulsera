</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Perfil</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/vendors/feather/feather.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/images/.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="height: 70px;">
                <a class="navbar-brand brand-logo mr-5" href="/admin/dashboard"><img src="/images/logo1.png" class="mr-2"
                        alt="logo" style="height: 100%; width: auto;"/></a>
                <a class="navbar-brand brand-logo-mini" href="/admin/dashboard"><img src="/images/logo-mini.png"
                        alt="logo" style="height: 100%; width: 80;"/></a>
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
                <div class="content-wrapper">
                    <div class="content-wrapper">
                        <div class="row">
                            <!-- Admin Information -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Admin Information</h4>
                                        <p><strong>Name:</strong> {{ $LoggedAdminInfo->name }}</p>
                                        <p><strong>Email:</strong> {{ $LoggedAdminInfo->email }}</p>
                                        <p><strong>Bio:</strong> {{ $LoggedAdminInfo->bio }}</p>
                                        <p><strong>Picture:</strong></p>

                                        @if ($LoggedAdminInfo->picture)
                                        <div style="max-width: 300px; margin: auto;">
                                            <!-- Adjust max-width and margin as needed -->
                                            <img src="{{ asset('storage/' . $LoggedAdminInfo->picture) }}"
                                                class="img-fluid rounded" alt="Admin Picture"
                                                style="max-width: 50%; height: auto;">
                                        </div>
                                        @else
                                        <p>Admin Picture not available</p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Profile Update Form -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Update Profile</h4>
                                        <form action="{{ route('admin.profile.update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" id="name" name="name" class="form-control"
                                                    value="{{ $LoggedAdminInfo->name }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input disabled type="email" id="email" name="email"
                                                    class="form-control" value="{{ $LoggedAdminInfo->email }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="bio">Bio</label>
                                                <textarea id="bio" name="bio"
                                                    class="form-control">{{ $LoggedAdminInfo->bio }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="picture">Profile Picture</label>
                                                <input type="file" id="picture" name="picture"
                                                    class="form-control-file">
                                            </div>
                                            <!-- Add more fields (image upload, etc.) as needed -->

                                            <button type="submit" class="btn btn-primary">Update Perfil</button>
                                        </form>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" 
                                        data-target="#addUserModal">Destroy Cuenta</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add User Modal -->
                    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form id="addContactForm" method="post" action="{{ route('profile.destroy', $LoggedAdminInfo->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addUserModalLabel">Advertencia</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label>
                                            Advertencia. Esta a punto de eliminar su cuenta de nuestro sistema.
                                            Al eliminar su cuenta se eliminaran todos sus datos, como los:
                                            Contacos de emerngencia, los datos de la pulsera y sus datos del perfil.
                                            Si esta seguro presione "Eliminar"
                                        </label>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </div>
                                </form>
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
</body>

</html>