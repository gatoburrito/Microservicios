<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <header>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="/juego/create">Crear Juego</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/juego">Ver Juegos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/genero">Ver Generos</a>
            </li>
        </ul>
    </header>
    <main>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Generos</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{$juego->id}}</th>
                    <td>{{$juego->nombre}}</td>
                    <td>{{$juego->marca}}</td>
                    <td>{{$juego->precio}}</td>
                    <td>
                    @foreach ($juego->generos as $genero)
                        <h5>{{$genero->genero}}</h5>
                    @endforeach
                    </td>
                    <td><a class="btn btn-primary" href="/juego/{{$juego->id}}/edit">Modificar</a></td>
                    <td>
                    <form method="POST" action="/juego/{{$juego->id}}" id="formulario">
                        @csrf
                        @method('DELETE')		
                        <input class="btn btn-primary" type="submit"  name="action" value="Eliminar">
                    </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>