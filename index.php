<?php
    session_start();
    include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    <!-- IMPORTANTE: Non ho capito a causa di quale problema,
        ma non riesco ad apportare modifiche tramite il foglio di stile,
            l'unica visibile è quella che vedete scritta -->
</head>

<body>
    
    <h1 class="text-center">A Real Password Generator</h1>

    <form action="generated.php" method="GET" id="my_form" class="d-flex flex-column align-items-center">

        <div class="mb-3">
            <div class="d-flex flex-column align-items-center">
                <label class="input-group-textl">Determina la lunghezza della password</label>
                <input name="password_length" type="number" min="1" max="99" class="form-control" aria-describedby="inputGroup-sizing-sm" checked<?php if (!empty($password_length)) echo 'value="' . $password_length . '"'; ?>> <!-- per mantenere la compilazione del form-->
            </div>
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input name="with_letters" class="form-check-input" type="checkbox" value="true" id="flexCheckDefault" checked<?php if ($with_letters) echo "checked"; ?>> <!-- per mantenere la compilazione del form-->
                <label class="form-check-label" for="flexCheckDefault">
                    Letters
                </label>
            </div>
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input name="with_numbers" class="form-check-input" type="checkbox" value="true" id="flexCheckDefault" checked<?php if ($with_numbers) echo "checked"; ?>> <!-- per mantenere la compilazione del form-->
                <label class="form-check-label" for="flexCheckDefault">
                    Numbers
                </label>
            </div>
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input name="with_specials" class="form-check-input" type="checkbox" value="true" id="flexCheckDefault" <?php if ($with_specials) echo "checked"; ?>> <!-- per mantenere la compilazione del form-->
                <label class="form-check-label" for="flexCheckDefault">
                    Include Special Characters?
                </label>
            </div>
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input name="with_repeats" class="form-check-input" type="checkbox" value="true" id="flexCheckDefault" checked <?php if ($with_repeats) echo "checked"; ?>> <!-- per mantenere la compilazione del form-->
                <label class="form-check-label" for="flexCheckDefault">
                    Can we repeat characters?
                </label>
            </div>
        </div>

        <input id="submit" type="submit">

    </form>

</body>
</html>