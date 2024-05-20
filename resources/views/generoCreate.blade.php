<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crear Genero</title>
</head>
<body style="background-color:#F0CCFF">
    <header>
        <ul class="nav justify-content-center" style="background-color:#D166FF">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/genero/create" style="background-color:#A551C8"><span style="color:black">Crear Genero</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/genero" style="color:black">Ver Generos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/juego" style="color:black">Ver Juegos</a>
            </li>
        </ul>
    </header>

    <main>
    <h1 style="text-align:center; padding-top:20px; padding-bottom:25px;">Crear Generos</h1>
        <form method="POST" action="/genero" id="formulario">
            @csrf
            <div class="mb-3">
                <label for="genero" class="form-label">Genero</label>
                <input type="text" name="genero" id="genero" class="form-control">
            </div>
            <button type="submit" name="action" value="enviar" class="btn btn-primary">Enviar</button>
        </form>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>