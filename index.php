<?php

$text = "Lorem ipsum dolor sit amet consectetur, adipisicing elit.";

$censure = $_GET['censure'];

$text_censure = str_replace("consectetur", $censure, $text);

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

    <div id="censure">

        <h1>Testo con censura</h1>

        <h3>Testo</h3>
        <p><?php echo $text_censure ?></p>

        <h3>Lunghezza testo</h3>
        <p><?php echo strlen($text_censure) ?></p>

    </div>

</body>

</html>