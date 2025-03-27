<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Compañía</title>
</head>
<body>

<h1>Formulario de Compañía</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('company.store') }}" method="POST">
    @csrf 

    <label>
        Ingrese la actividad principal de la compañía:
        <br>
        <input type="text" name="primary_activity_company" required>
    </label>
    <br><br>

    <button type="submit">Enviar formulario</button> 
</form>

</body>
</html>
