<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $modo }}</title>
    <link rel="stylesheet" href="../css/form.css">

</head>

<body>
    <h1> {{ $modo }}</h1>

    <label for="Marca">Marca</label>
    <input type="text" class="input-text" name="Marca" value="{{ isset($autos->Marca)?$autos->Marca:'' }}" id="Marca">
    <br>
    <label for="Modelo">Modelo</label>
    <input type="text" class="input-text" name="Modelo" value="{{ isset($autos->Modelo)?$autos->Modelo:'' }}" id="Modelo">
    <br>
    <label for="Año">Anio</label>
    <input type="text" class="input-text" name="Anio" value="{{ isset($autos->Anio)?$autos->Anio:'' }}" id="Anio">
    <br>
    <input type="submit" class="input-button" value="{{ $modo }} datos">

    <a href="{{ url('autos/') }}">Regresar</a>
</body>

</html>