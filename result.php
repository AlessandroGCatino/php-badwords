<?php

    $text = $_POST["text"];
    $censor = $_POST["badword"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato</title>
</head>
<body>
    <h1>
        Il testo che hai immesso è lungo: 
        <?= strlen($text)?> caratteri
    </h1>
    <h2>
        Ecco il paragrafo che hai inserito: <br>
    </h2>
    <?= $text?>
    <h1>
        Ecco il testo modificato:
    </h1>

    <?php
        echo str_replace($censor ,"xxx", $text);
    ?>
    


    <style>
        h1,
        h2,
        p{text-align: center;}
    </style>
</body>
</html>