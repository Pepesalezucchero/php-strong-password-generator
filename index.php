<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>PHP Password generator</title>
</head>

<body>
    <form>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="passwordLength" name="passwordLength" min="1">
            <label for="lenght">Inserisci la lunghezza della Password</label>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Genera</button>
        </div>
    </form>
<h3 class="mt-3 ms-1">password</h3>

<?php 

$lenght = $_GET['passwordLength'];
echo $lenght;

?>

</body>

</html>