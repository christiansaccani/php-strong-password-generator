<?php
    session_start();
    $_SESSION['generatedPassword'] = null;

    $password_length = isset($_GET['password_length']) ? $_GET['password_length'] : null;
    $with_letters = isset($_GET['with_letters']) ? $_GET['with_letters'] : null;

    function generateRandomString($length, $letters) {
        $characters = '';
        if ($letters === 'true') {
            $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    if (!is_null($password_length)) {
        $_SESSION['generatedPassword'] = generateRandomString($password_length, $with_letters);
    }
?>


<!-- $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$%?_-'; -->