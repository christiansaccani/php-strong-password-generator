<?php
    session_start();
    $_SESSION['generatedPassword'] = generateRandomString($password_length);
?>