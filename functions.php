<?php
    session_start();
    $_SESSION['generatedPassword'] = null;

    $password_length = isset($_GET['password_length']) ? $_GET['password_length'] : null;
    $with_letters = isset($_GET['with_letters']) ? $_GET['with_letters'] : null;
    $with_numbers = isset($_GET['with_numbers']) ? $_GET['with_numbers'] : null;

    function generateRandomString($length, $letters, $numbers) {
        $characters = '';

        if ($letters === 'true') {
            $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }

        if ($numbers === 'true') {
            $characters .= '0123456789';
        }

        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    if (!is_null($password_length)) {
        $_SESSION['generatedPassword'] = generateRandomString($password_length, $with_letters, $with_numbers);
    }
?>


<!-- $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$%?_-'; -->