<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    <link rel="shortcut icon" href="/images/favicon.png" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="../../images/logo1.png" alt="logo" style="height: 100px; width: auto;">
                            </div>
                            <h4>¿Nuevo aquí?</h4>
                            <h6 class="font-weight-light">Registrarse es fácil. Solo se necesitan unos pocos pasos.</h6>
                            @if (session('success'))
                            <div>{{ session('success') }}</div>
                            @endif
                            <form action="{{ route('admin.verificacion.submit') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password (min. 8 characters)</label>                                    
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password" name="password" required minlength="8">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                                <img src="/images/ojo.png" alt="Mostrar contraseña" style="width: 20px; height: 20px;" id="iconImage">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Campo oculto para el código -->
                                <input type="hidden" id="code" name="code">

                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>

                            <div class="text-center mt-4 font-weight-light">
                                ¿Ya cuentas con una cuenta? <a href="/admin/login" class="text-primary">Inicie sesión</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
    < %
    if (typeof errorMessage !== 'undefined') {
        %
        >
        toastr.error("<%= errorMessage %>"); <
        %
    } % >
    </script>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/js/off-canvas.js"></script>
    <script src="/js/hoverable-collapse.js"></script>
    <script src="/js/template.js"></script>
    <script src="/js/settings.js"></script>
    <script src="/js/todolist.js"></script>
    <script>
        // Función para generar el número aleatorio
        function generarCodigoAleatorio() {
            return Math.floor(100000 + Math.random() * 900000);
        }

        // Generar y mostrar el código cuando se carga la página
        document.addEventListener('DOMContentLoaded', function () {
            const codigo = generarCodigoAleatorio();
            document.getElementById('code').value = codigo;
            console.log("Código generado y enviado:", codigo); // Para depuración
        });
    </script>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');
        const iconImage = document.getElementById('iconImage'); // Identifica la imagen
    
        togglePassword.addEventListener('click', function () {
            // Cambia el tipo de entrada
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
        
            // Cambia la imagen del icono
            iconImage.src = type === 'password' 
                ? '/images/ojo.png' // Ruta a la imagen para mostrar
                : '/images/ojo-cerrado.png'; // Ruta a la imagen para ocultar
        });
    </script>
</body>

</html>