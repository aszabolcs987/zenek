<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Zenék</title>
</head>

<body>

    <div class="container mt-3 p-4 bg-secondary rounded w-50">
        <h1 class="text-center">Zenék</h1>
        <form action="" method="POST">
            <!-- adatok mentese -->
            @csrf

            <div class="mb-3">
                <label for="cim" class="form-label">Cím:</label>
                <input type="text" name="cim" class="form-control" placeholder="A dal címe: ">
            </div>

            <div class="mb-3">
                <label for="eloado" class="form-label">Előadó:</label>
                <input type="text" name="eloado" class="form-control" placeholder="A dal előadója: ">
            </div>

            <div class="mb-3">
                <label for="megjelenes" class="form-label">Megjelenés:</label>
                <input type="date" name="megjelenes" class="form-control">
            </div>

            <div class="mb-3">
                <label for="megtekintes" class="form-label">Megtekintések száma:</label>
                <input type="number" name="megtekintes" class="form-control" placeholder="Megtekintések száma: ">
            </div>

            <div class="mb-3">
                <label for="like" class="form-label">Likeok száma:</label>
                <input type="number" name="like" class="form-control" placeholder="Likeok száma: ">
            </div>

            <button class="btn btn-dark w-100">Küldés</button>
        </form>
    </div>
</body>

</html>
