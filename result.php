<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato</title>
</head>
<body>
    <h1>
        Ecco il testo modificato:
    </h1>

    <?php
        echo str_replace($_GET["badword"],"xxx",$_GET["text"]);
    ?>
    


    <style>
        h1,
        p{text-align: center;}
    </style>
</body>
</html>