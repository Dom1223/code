<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="card shadow-lg form-signin">
            <div class="card-body p-5">
                <h1 class="fs-4 card-title fw-bold mb-4">Registro</h1>
                <form method="POST" action="#" autocomplete="off">

                    <div class="mb-3">
                        <label class="mb-2" for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" value="" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="email">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" value="" required>
                    </div>

                    <div class="mb-3">
                        <label class="mb-2" for="user">Usuario</label>
                        <input type="text" class="form-control" name="user" id="user" value="" required>
                    </div>

                    <div class="mb-3">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>

                    <div class="mb-3">
                        <label for="repassword">Confirmar contraseña</label>
                        <input type="password" class="form-control" name="repassword" id="repassword" required>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Registrar
                    </button>
                </form>

            </div>
            <div class="card-footer py-3 border-0">
                <div class="text-center">
                    <a href="productos.php">Iniciar sesión</a>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>