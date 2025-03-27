<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario del Cuerpo de Ejército</title>
</head>
<body>

<h1>Formulario de Cuerpo de Ejército</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('armyCorps.store') }}" method="POST" enctype="multipart/form-data">
    @csrf 

    <label>
        Ingrese la denominación del cuerpo de ejército:
        <br>
        <input type="text" name="denomination_ac" required>
    </label>
    <br><br>

    <button type="submit">Enviar formulario</button> 
</form>

</body>
</html>

