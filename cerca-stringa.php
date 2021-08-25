<?php

/*
L'utente invia come parametro GET una parola. Il php cerca
questa parola nel loremText, e scrive se l'ha trovata 
e la sua posizione.
*/

$loremText = "Lorem ipsum dolor sit amet, consectetur adipisci elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullamco laboriosam, nisi ut aliquid ex ea commodi consequatur. Duis aute irure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

// assegno alla variabile il valore del parametro get "parola"
// "parola" è la chiave in get.
// es: http://localhost:8888/boolean-live-php/cerca-stringa.php?parola=lorem
$parolaDaCercare = $_GET['parola'];

// popoliamo una variabile con strpos
$result = stripos($loremText, $parolaDaCercare);

// result può essere un intero >= 0, e in questo caso abbiamo trovato la parola
// oppure può essere false, e in questo caso la parola non esiste

if($result !== false) {
    echo "La parola {$parolaDaCercare} esiste ed è in posizione {$result}";
} else {
    echo "La parola {$parolaDaCercare} non esiste!";
}

?>