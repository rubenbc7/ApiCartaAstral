<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de capturas astrales registradas</title>
</head>
<body>
    <h1>Registro de cartas astrales</h1>
    @if(Session::has('success'))
        <p style="color: green;">{{Session::get('success')}} </p>
    @endif
    @if(Session::has('error'))
        <p style="color: red;">{{Session::get('error')}} </p>
    @endif
    <a href="{{route('api.capturas.create')}}">Añadir Carta Astral</a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Genero</th>
                <th>Nacimiento</th>
                <th>Pais</th>
                <th>Ciudad</th>
                <th>Signo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($capturas as $carta)
                <tr>
                    <td>{{$carta->Nombre}}</td>
                    <td>{{$carta->Apellido}}</td>
                    <td>{{$carta->Genero}}</td>
                    <td>{{$carta->Nacimiento}}</td>
                    <td>{{$carta->Pais}}</td>
                    <td>{{$carta->Ciudad}}</td>
                    <td>{{$carta->Signo}}</td>
                    <td>
                        <form method="post" action="{{route('api.capturas.destroy', $carta->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>