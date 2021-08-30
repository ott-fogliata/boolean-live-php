<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP API</title>
</head>
<body>
<b>HOME PAGE</b>
<?php

    require_once __DIR__ . "/templates/header.php";


?>

altro testo <br/>
<a href="pages/about.php">About me</a>

La somma è: 

<?php echo sum(1, 3); ?>.

<br />
<?php var_dump(__DIR__); ?>

    
</body>
</html>