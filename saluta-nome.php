<!-- 

    L'utente richiama la pagina saluta-nome con un parametro in GET
    che descrive il nome dell'utente. La pagina risponde con Ciao e il nome
    dell'utente all'interno del parametro GET

    saluta-nome.php?name=michele

-->
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

    $userName = $_GET["name"];
    $userName = ucfirst($userName);

    ?>
    <h1>Ciao <?php echo $userName ?>!</h1>
    
    <!-- oppure -->
    <h1>Ciao <?php echo ucfirst($_GET["name"]) ?>!</h1>
    
</body>
</html>