<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
//ruta para crear un nuevo avistamiento
    <a href="{{ route('avistamientos.create') }}">Crear nuevo avistamiento</a>
</head>

<body>
    //mostar los avistamientos
    <h1>Avistamientos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID AVE</th>
                <th>NOMBRE COMUN</th>
                <th>NOMBRE CIENTIFICO</th>
                <th>FAMILIA</th>
                <th>ESPECIE</th>
                <th>NOMBRE ORNITOLOGO</th>
                <th>CODIGO PROFESIONAL</th>
                <th>IMAGEN</th>
                <th>UBICACION</th>
                <th>ACCIONES</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($avistamientos as $avistamiento)
            <tr>
                <td>{{ $avistamiento->id }}</td>
                <td>{{ $avistamiento->ave_id }}</td>
                <td>{{ $avistamiento->ave->nombre_comun }}</td>
                <td>{{ $avistamiento->ave->nombre_cientifico }}</td>
                <td>{{ $avistamiento->ave->familia }}</td>
                <td>{{ $avistamiento->ave->especie }}</td>
                <td>{{ $avistamiento->ornitologo->nombre }}</td>
                <td>{{ $avistamiento->ornitologo->codigo_profesional }}</td>
                <td>{{ $avistamiento->imagen }}</td>
                <td>{{ $avistamiento->ubicacion }}</td>
                <td
                </td>
                   
            @endforeach
        </tbody>
    
</body>
</html>