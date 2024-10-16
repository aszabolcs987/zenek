<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Mentett adatok</title>
</head>

<body>

    <!-- php artisan make:view success -->
    <div class="container mt-3 p-4 bg-secondary rounded w-50">
        <h1 class="text-center text-white">Mentett Zenék</h1>
        <table class="table table-striped">
            <tr>
                <th>Cím</th>
                <th>Előadó</th>
                <th>Megjelenés</th>
                <th>Megtekintések</th>
                <th>Likeok</th>
            </tr>
            <!-- egy foreach kiir minden mentett adatot -->
            @foreach ($zenek as $zene)
            <tr>
                <td>{{ $zene->cim }}</td>
                <td>{{ $zene->eloado }}</td>
                <td>{{ $zene->megjelenes }}</td>
                <td>{{ $zene->megtekintes }}</td>
                <td>{{ $zene->like }}</td>
            </tr>
            @endforeach
        </table>
    </div>


</body>

</html>
