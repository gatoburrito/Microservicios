<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body style="background-color:#F0CCFF">
    <header>
        <ul class="nav justify-content-center" style="background-color:#D166FF">
            <li class="nav-item">
                <a class="nav-link" href="/juego/create" style="color:black">Crear Juego</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/juego" style="background-color:#A551C8"><span style="color:black">Ver Juegos</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/genero" style="color:black">Ver Generos</a>
            </li>
        </ul>
    </header>
    <main>
        <h1 style="text-align:center; padding-top:20px; padding-bottom:25px;">Juegos</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Generos</th>
                    <th scope="col">Ver</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($juegos as $juego)
                <tr>
                    <th>{{$juego->id}}</th>
                    <td>{{$juego->nombre}}</td>
                    <td>{{$juego->marca}}</td>
                    <td>{{$juego->precio}}</td>
                    <td>
                        @foreach ($juego->generos as $genero)
                            {{$genero->genero}}<br>
                        @endforeach
                    </td>
                    <td><a class="btn btn-primary" href="/juego/{{$juego->id}}">IR</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>