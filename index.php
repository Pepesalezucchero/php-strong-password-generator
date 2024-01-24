<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>PHP Password generator</title>

    <?php require_once __DIR__ . '/functions.php'; ?>

</head>

<body>
    <form>
        <div class="form-floating m-2">
            <input type="number" class="form-control" id="passwordLength" name="passwordLength" min="1">
            <label for="lenght">Inserisci la lunghezza della Password</label>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary m-2">Genera</button>
        </div>
    </form>

    <h2 class="m-2">La tua Password:</h2>
    <span class="d-block m-2 fs-4"> <?php echo $lenght; ?> </span>

</body>

</html>