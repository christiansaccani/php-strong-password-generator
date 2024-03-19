<?php
    session_start();
    $_SESSION['generatedPassword'] = null;

    $password_length = isset($_GET['password_length']) ? $_GET['password_length'] : null;
    $with_letters = isset($_GET['with_letters']) ? $_GET['with_letters'] : null;
    $with_numbers = isset($_GET['with_numbers']) ? $_GET['with_numbers'] : null;
    $with_specials = isset($_GET['with_specials']) ? $_GET['with_specials'] : null;
    $with_repeats = isset($_GET['with_repeats']) ? $_GET['with_repeats'] : null;

    function generateRandomString($length, $letters, $numbers, $specials, $repeats) {
        $characters = '';

        if ($letters === 'true') {
            $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }

        if ($numbers === 'true') {
            $characters .= '0123456789';
        }

        if ($specials === 'true') {
            $characters .= '!$%?_-';
        }

            if ($repeats === 'true') {

                $charactersLength = strlen($characters);
                $randomString = '';
                while (strlen($randomString) < $length) {
                    $randomString .= $characters[random_int(0, $charactersLength - 1)];
                }

                return "La password generata è: {$randomString}";


            } else {

                if (strlen($characters) >= $length) {

                    $charactersLength = strlen($characters);
                    $randomString = '';
                    
                    while (strlen($randomString) < $length) {
                        $currentChar = $characters[random_int(0, $charactersLength - 1)];
                        
                        // per verificare se il carattere corrente è già presente nella stringa
                        if (strpos($randomString, $currentChar) === false) {
                            $randomString .= $currentChar;
                        }
                    }

                    return "La password generata è: {$randomString}";
                
                } else {
                    return "C'è stato un errore nella generazione della password, ne hai richiesta una più lunga dei caratteri disponibili.<br>
                    Torna alla pagina precedente e riprova";
                }
            }
    }

    if (!is_null($password_length)) {
        $_SESSION['generatedPassword'] = generateRandomString($password_length, $with_letters, $with_numbers, $with_specials, $with_repeats);
    }
?>