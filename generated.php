<?php
    session_start();
    include 'functions.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words: Censored</title>

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bad Words</h1>

    <?php
    if (!empty($password_length)) {
        echo "<p id='my_answer'>La password generata è: {$_SESSION['generatedPassword']}</p>";
    }
?>
</body>
</html>