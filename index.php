<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <main>
        <?php

            # commento

            // altro commento

            /*

            commento multi linea

            */

            $name = "Michele";

            // qui va il codice php
            echo "<h1>Ciao " . $name . "!</h1>"; 

            $bool = true;  // 1
            $altroBool = false;  // 0
        ?>

        <h1>Ciao <?php echo $name ?>!</h1>

        <?php 

            echo  "<h1>Ciao {$name}!</h1>"; 

        ?>

        <?php echo 12; ?>

    </main>
    
</body>
</html>




