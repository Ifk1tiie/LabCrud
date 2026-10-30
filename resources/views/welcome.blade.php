<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Productos</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container mt-5">
        <div class="text-center">
            <h1>CRUD de Productos</h1>
            <p class="lead">Sistema de administración de productos con Laravel.</p>

            <a href="{{ route('products.index') }}" class="btn btn-primary">
                Administrar productos
            </a>
        </div>
    </div>
</body>
</html>
