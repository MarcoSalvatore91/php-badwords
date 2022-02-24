<?php

$text = "Lorem ipsum dolor sit amet consectetur, adipisicing elit.";

$censure = $_GET['censure'];

$text_censure = str_replace($censure, "***", $text);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Censure</title>
</head>

<body>

    <div id="censure">

        <h1>Testo con censura</h1>

        <h3>Testo</h3>
        <p><?php echo $text_censure ?></p>

        <h3>Lunghezza testo</h3>
        <p><?php echo strlen($text_censure) ?></p>

    </div>

    <div class="icon">
        <a href="index.php"><i class="fa-solid fa-angle-left fa-2xl">Indietro</i></a>
    </div>

</body>

</html>