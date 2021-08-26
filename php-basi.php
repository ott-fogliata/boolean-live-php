<?php

$x = 0;

$x += 5;
$x -= 5;
$x *= 5;
$x /= 5;


// l'utente passa il suo nome attravero un parametro GET name
// se si chiama Marco, gli rispondiamo con Ciao come stai, amico mio!
// altrimenti gli rispondiamo Ciao come stai, sconosciuto!

$name = strtolower($_GET['name']);

$greetings = "Ciao come stai, ";

if( $name === 'marco') {
    $greetings .= 'amico mio!';
} else {
    $greetings .= 'sconosciuto ' . ucfirst($name);
}

echo $greetings;
?>

<hr/>


<?php 


$primoArray = [];
var_dump($primoArray);
?>

<hr/>

<?php 


$secondoArray = [
    1, 
    'ciao', 
    5, 
    'parola', 
    'altra parola'
];

//aggiungiamo a $secondoArray un nuovo elemento
//
$secondoArray[] = 'nuovo';  // best!
array_push($secondoArray, 'ulteriore elemento');

var_dump($secondoArray);
echo $secondoArray[1];

?>

<hr />

<?php

// associativo
$terzoArray = [
    'città' => 'Taranto',
    'nome' => 'Ottavio',
    'cognome' => 'Fogliata',
];

$terzoArray['nuovaChiave'] = 'nuovo valore';

var_dump($terzoArray);
echo $terzoArray['nome'];

// array_keys ritorna un array con solo le chiavi dell'array da cui parte.
var_dump(array_keys($terzoArray));


?>

<hr/>

<b>Array Merge</b>

<?php 

$a = [1, 2, 3, 4, 5];
$b = [6, 7, 8, 9, 10];

// creiamo un nuovo array $c, ovvero il merge di $a + $b

$c = array_merge($a, $b);

var_dump($c);


?>

<hr />
Random
<?php 

echo rand(); 

?>

<br />

<?php 

echo rand(1, 6);

?>