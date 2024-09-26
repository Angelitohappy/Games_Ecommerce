<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulario de Pago</title>
    <style>
        html,
        body {
            height: 100%;
        }
    </style>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="container">
            <h2 class="text-center mb-4">Contacto Usuario</h2>
            <form>
                <div class="row">
                    <div class="col-5 mb-3">
                        <label for="firstName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="firstName" required>
                    </div>
                    <div class="col-5 mb-3">
                        <label for="lastName" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="lastName" required>
                    </div>
                    <div class="col-5 mb-3">
                        <label for="number" class="form-label">Número de Teléfono</label>
                        <input type="text" class="form-control" id="number" required>
                    </div>
                    <div class="col-5 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>