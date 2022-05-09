<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutosCRUD</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <h1>Autos<span>CRUD</span></h1>

    <a href="{{ url('autos/create') }}" class="nuevo-auto">Registrar nuevo auto</a>

    <table>

        <thead>
            <tr>
                <th>#</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($autos as $auto)
            <tr>
                <td>{{ $auto->id }}</td>
                <td>{{ $auto->Marca }}</td>
                <td>{{ $auto->Modelo }}</td>
                <td>{{ $auto->Anio }}</td>
                <td class="acciones">
                    
                    <a href="{{ url('/autos/'.$auto->id.'/edit') }}" class="editar">
                        Editar
                    </a>
                
                    <form action="{{ url('/autos/'.$auto->id ) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar" class="eliminar">

                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</body>

</html>