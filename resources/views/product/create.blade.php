
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear producto</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Crear producto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" name="description" id="description"
                    class="form-control" value="{{ old('description') }}" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" name="price" id="price"
                    class="form-control" step="0.01" min="0"
                    value="{{ old('price') }}" required>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" name="stock" id="stock"
                    class="form-control" min="0"
                    value="{{ old('stock') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">
                Guardar producto
            </button>

            <a href="{{ url('/products') }}" class="btn btn-secondary">
                Volver
            </a>
        </form>
    </div>
</body>
</html>
