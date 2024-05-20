<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Geenro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <header>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="/genro/create">Crear Genero</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/genero">Ver Generos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/jeugo">Ver Juegos</a>
            </li>
        </ul>
    </header>

    <main>
        <form method="POST" action="/genero/{{$genero->id}}" id="formulario">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="genero" class="form-label">Genero</label>
                <input type="text" name="genero" id="genero" class="form-control" value="{{$genero->genero}}">
            </div>
            <button type= "submit" name="action" value="enviar" class="btn btn-primary">Enviar</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>