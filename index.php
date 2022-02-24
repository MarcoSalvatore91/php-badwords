<?php

$text = "Lorem ipsum dolor sit amet consectetur, adipisicing elit.";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP</title>
</head>

<body>

    <div>

        <h1>Testo senza censura</h1>

        <h3>Testo</h3>
        <p><?php echo $text ?></p>

        <h3>Lunghezza testo</h3>
        <p><?php echo strlen($text) ?></p>

    </div>

    <div id="censure-word">

        <h3>Quale parola vuoi censurare?</h3>

        <form action="censure.php" method="GET">
            <input type="text" placeholder="Inserisci una parola" name="censure">
            <button type="submit">PREMI QUI</button>
        </form>

    </div>

</body>

</html>