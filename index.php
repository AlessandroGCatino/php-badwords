<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    
</head>
<body class="text-center">
    <h1>No more badwords!</h1>
    <form action="result.php" method="post">
        <div>
            <label for="text">Inserisci il testo con la parola da censurare:</label>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="badword">Inserisci la parola da censurare:</label>
            <input type="text" name="badword" id="badword"></input>
        </div>
        <button type="submit">Elabora</button>
    </form>

    <style>
        body{text-align: center;}
        label{display: block;}
        button{margin-top: 20px;}
    </style>
</body>
</html>