<?php

$password_length = isset($_GET['password_length']) ? $_GET['password_length'] : null;

function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$%?';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <h1 class="text-center">A Real Password Generator</h1>

    <form method="GET" id="my_form" class="d-flex flex-column align-items-center">

        <div class="mb-3">
            <div class="d-flex flex-column align-items-center">
                <label class="input-group-textl">Determina la lunghezza della password</label>
                <input name="password_length" type="number" min="1" max="99" class="form-control" aria-describedby="inputGroup-sizing-sm" <?php if (!empty($password_length)) echo 'value="' . $password_length . '"'; ?>> <!-- per mantenere la compilazione del form-->
            </div>
        </div>
        <input id="submit" type="submit">

        <?php
            if (!empty($password_length)) {
                $generatedPassword = generateRandomString($password_length);
                echo "<p id='my_answer'>La password generata è: $generatedPassword</p>";
            }
        ?>

    </form>

</body>
</html>