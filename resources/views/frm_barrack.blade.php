<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Barracas</title>
</head>
<body>

<h1>Formulario de Barracas</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('barracks.store') }}" method="POST" enctype="multipart/form-data">
    @csrf 

    <label>
        Ingrese el nombre de la barraca:
        <br>
        <input type="text" name="name_barrack" required>
    </label>
    <br><br>

    <label>
        Ingrese la ubicación de la barraca:
        <br>
        <input type="text" name="location" required>
    </label>
    <br><br>

    <button type="submit">Enviar formulario</button> 
</form>

</body>
</html>
