<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Carta Astral</title>
</head>
<body>
    <h1>Registrar Carta Astral</h1>
    <a href="{{route('api.capturas.index')}}">Volver </a>
    <form method="post" action="{{route('api.capturas.store')}}">
        @csrf
        <label>Nombre</label>
        <input type="text" name="Nombre">
        <br/>
        <label>Apellido</label>
        <input type="text" name="Apellido">
        <br/>
        <label>Genero</label>
        <input type="text" name="Genero">
        <br/>
        <label>Nacimiento</label>
        <input type="text" name="Nacimiento">
        <br/>
        <label>Pais</label>
        <input type="text" name="Pais">
        <br/>
        <label>Ciudad</label>
        <input type="text" name="Ciudad">
        <br/>
        <label>Signo</label>
        <input type="text" name="Signo">
        <br/>
        <button type="submit">Agregar Carta</button>


    </form>
</body>
</html>