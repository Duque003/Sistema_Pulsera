<!DOCTYPE html>
<html>
<head>
    <title>Correo de Verificación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 10px;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background-color: white;
            padding: 20px;
            border-radius: 0 0 10px 10px;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Verificación de Cuenta</h2>
        </div>
        <div class="content">
            <p>Hola {{ $name }},</p>
            <p>Gracias por registrarte en nuestra plataforma. Para completar tu registro, por favor ingresa el siguiente código:</p>
            <h3>{{ $code }}</h3>
            <p>Si no solicitaste este registro, por favor ignora este mensaje.</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Smart Health. Todos los derechos reservados.</p>
        </div>
    </div>
</body>
</html>
