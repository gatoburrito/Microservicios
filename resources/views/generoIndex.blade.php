<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body style="background-color:#F0CCFF">
    <header>
        <ul class="nav justify-content-center" style="background-color:#D166FF">
            <li class="nav-item">
                <a class="nav-link" href="/genero/create" style="color:black">Crear Genero</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/genero" style="background-color:#A551C8"><span style="color:black">Ver Generos</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/juego" style="color:black">Ver Juegos</a>
            </li>
        </ul>
    </header>
    <main>
    <h1 style="text-align:center; padding-top:20px; padding-bottom:25px;">Generos</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Ver</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($generos as $genero)
                <tr>
                    <th>{{$genero->id}}</th>
                    <td>{{$genero->genero}}</td>
                    <td><a class="btn btn-primary" href="/genero/{{$genero->id}}">IR</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>