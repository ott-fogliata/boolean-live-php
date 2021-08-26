<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

    /*
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    */


    $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    // calcolo la lunghezza della stringa lorem
    $len = strlen($lorem);

    // prelevo il valore del parametro in GET badword e lo assegno alla variabile $badWord
    $badWord = $_GET["badword"];

    // replace di badWord con i tre asterischi ***
    $loremNew = str_ireplace($badWord, '***', $lorem);

    // calcoliamo nuovamente la lunghezza del nuovo paragrafo con censura
    $lenNew = strlen($loremNew);

    ?>

    <p><?php echo $lorem ?></p>
    <div>Il paragrafo è lungo <?php echo $len?> caratteri.</div>

    <hr/>

    <p><?php echo $loremNew ?></p>
    <div>Il paragrafo è lungo <?php echo $lenNew ?> caratteri.</div>


    
</body>
</html>




