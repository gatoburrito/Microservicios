<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crear Juego</title>
</head>
<body>

    <header>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/juego/create">Crear Juego</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/juego">Ver Juegos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/genero">Ver Generos</a>
            </li>
        </ul>
    </header>

    <main>
        <form method="POST" action="/juego" id="formulario">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" name="marca" id="marca">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio">
            </div>

            {{--Insercion--}}
            <div>
                <select class="form-select form-select-lg mb-3" aria-label="Large select example" id="generos" name="generos[]" multiple>
                    <option value="" selected>Selecciona un genero</option>
                    @foreach ($generos as $genero)
                    <option value="{{$genero->id}}">{{$genero->genero}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" name="action" value="enviar" class="btn btn-primary">Enviar</button>
        </form>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>