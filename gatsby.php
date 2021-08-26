<?php

// l'utente invia il proprio nome con un parametro GET
// se il suo nome è incluso nell'array degli invitati 
// allora potrò entrare
// altrimenti la porta si chiude.

$name = $_GET["name"];

$invitati = [
    'gino',
    'pino',
    'maura',
    'anna',
    'mimmo'
];

if(in_array(strtolower($name), $invitati)) {

    echo "Puoi entrare!";

} else {

    echo "Non puoi entrare!";

}





?>