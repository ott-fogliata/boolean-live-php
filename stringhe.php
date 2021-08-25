<?php 

$str = 'Ciao michele!<br/>';
// sostituire michele con pippo.

// str_replace(valoreOriginale, nuovoValore, stringaOriginale)
$str = str_replace('michele', 'pippo', $str);
echo $str;

// ora case-insensitive:

$str2 = 'Ciao Michele!<br/>';
// sostituire michele con pippo.

// str_replace(valoreOriginale, nuovoValore, stringaOriginale)
$str2 = str_ireplace('michele', 'pippo', $str2);
echo $str2;


// Eliminare gli spazi "laterali" a una stringa

$str3 = ' Mimmo<br/> ';
// puliamo la stringa
$str3 = trim($str3);

echo $str3;


// ritorniamo la lunghezza della stringa $str3
$lunghezza = strlen($str3);
echo "La stringa ha {$lunghezza} caratteri<br/>";


// strpos


$text = "Lorem ipsum bla bla ciaone!";

// (1) dove cercare, (2) cosa cercare
$posizione = strpos($text, 'Lorem');

var_dump($posizione);


// scriviamo "l'ho trovato" se nella stringa è contenuta la substring Lorem
if(strpos($text, 'Lorem') !== false) {
    echo "<br/>L'ho trovato!";
}


?>