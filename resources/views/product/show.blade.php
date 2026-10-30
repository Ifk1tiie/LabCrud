<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver producto</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container mt-5">
        <h1>Detalles del producto</h1>

        <div class="card mt-3">
            <div class="card-body">
                <p><strong>ID:</strong> {{ $product->id }}</p>
                <p><strong>Descripción:</strong> {{ $product->description }}</p>
                <p><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
                <p><strong>Stock:</strong> {{ $product->stock }}</p>

                <a href="{{ route('products.edit', $product->id) }}"
                   class="btn btn-success">Editar</a>

                <a href="{{ route('products.index') }}"
                   class="btn btn-secondary">Volver a la lista</a>
            </div>
        </div>
    </div>
</body>
</html>
