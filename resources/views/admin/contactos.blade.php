</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contactos</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/vendors/feather/feather.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugins:css -->
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
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/images/logo-mini.png" />
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
                                        href="{{ route('admin.contactos') }}">Tabla de Contactos</a>
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
                        <h4 class="card-title mb-0">Tabla de contactos</h4>
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addUserModal">
                            <i class="fas fa-user-plus"></i> Agregar Contacto
                        </button>
                    </div>

                    <!-- Add User Modal -->
                    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form id="addContactForm" method="post" action="{{ route('contactos.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addUserModalLabel">Agregar Contacto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="contactoNombre">Nombre</label>
                                            <input type="text" class="form-control" id="contactoNombre" name="nombre" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="contactoNumero">Número de Teléfono</label>
                                            <input type="text" class="form-control" id="contactoNumero" name="numero" required
                                            minlength="10" maxlength="10" pattern="\d{10}" title="Debe ser un número de 10 dígitos">
                                        </div>
                                        <div class="form-group">
                                            <label for="contactoParentesco">Parentesco</label>
                                            <select class="form-control" id="contactoParentesco" name="parentesco" required>
                                                <option value="">Seleccione parentesco</option>
                                                <option value="Padre">Padre</option>
                                                <option value="Madre">Madre</option>
                                                <option value="Abuelo(a)">Abuelo(a)</option>
                                                <option value="Tio(a)">Tio(a)</option>
                                                <option value="Hermano(a)">Hermano(a)</option>
                                                <option value="Hijo(a)">Hijo(a)</option>
                                                <option value="Primo(a)">Primo(a)</option>
                                                <option value="Amigo(a)">Amigo(a)</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Guardar Contacto</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Número de Teléfono</th>
                                    <th>Parentesco</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contactos as $data)
                                    <tr>
                                        <td>{{ $data->nombre }}</td>
                                        <td>{{ $data->numero }}</td>
                                        <td>{{ $data->parentesco }}</td>
                                        <td>
                                            <div class="d-inline-flex align-items-center">
                                                <!-- Edit Button -->
                                                <a href="#" class="btn btn-sm btn-outline-secondary edit-user mr-1 mb-2" data-toggle="modal" data-target="#editUserModal{{ $data->id }}" data-id="{{ $data->id }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                 <!-- Delete Button -->
                                                <form action="{{ route('contactos.destroy', $data->id) }}" method="POST" class="delete-form mt-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Edit User Modal -->
                                    <div class="modal fade" id="editUserModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel{{ $data->id  }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form id="editUserForm{{ $data->id }}" action="{{ route('contactos.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editUserModalLabel{{ $data->id }}">Editar Contacto</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="{{ $data->id }}">
                                                        <div class="form-group">
                                                            <label for="editContactName{{ $data->id }}">Nombre</label>
                                                            <input type="text" class="form-control" id="editContactName{{ $data->id }}" name="nombre" value="{{ $data->nombre }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="editContactNumber{{ $data->id }}">Número de Teléfono</label>
                                                            <input type="text" class="form-control" id="editContactNumber{{ $data->id }}" name="numero" value="{{ $data->numero }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="editContactP{{ $data->id }}">Parentesco</label>
                                                            <select class="form-control" id="editContactP{{ $data->id }}" name="parentesco" required>
                                                                <option value="Padre" {{ $data->parentesco === 'Padre' ? 'selected' : '' }}>Padre</option>
                                                                <option value="Madre" {{ $data->parentesco === 'Madre' ? 'selected' : '' }}>Madre</option>
                                                                <option value="Hermano(a)" {{ $data->parentesco === 'Hermano(a)' ? 'selected' : '' }}>Hermano(a)</option>
                                                                <option value="Amigo(a)" {{ $data->parentesco === 'Amigo(a)' ? 'selected' : '' }}>Amigo(a)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
