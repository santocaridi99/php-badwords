<?php
// variabile paragrafo
$paragraph = 'Hello World in php :D censuraquesto';
// get ci servirà per tutti i query string nella barra url
// es. per censurare  nel paragrafo "censuraquesto" scrivere dopo lo /
// ?badword=censuraquesto
$badword = $_GET['badword'];
// funzione per rimpiazzare una stringa  accetta in ingresso (parola da censurare ,con cosa voglio rimpiazzare , dove si trova questa parola)
$fix_paragraph = str_replace($badword, '***', $paragraph)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo esercizio in PHP</title>
</head>

<body>
    <h1>Paragrafo</h1>
    <p>
        <?php echo $paragraph  ?>
    </p>
    <hr>
    <h1>Lunghezza paragrafo</h1>
    <p>
        <?php echo strlen($paragraph)  ?>
    </p>
    <hr>
    <h1>Parola da censurare</h1>
    <!-- guardare commenti sopra -->
    <p>
        <?php echo $badword  ?>
    </p>
    <hr>
    <h1>Paragrafo censurato</h1>
    <p>
        <!-- guardare commenti sopra -->
        <?php echo $fix_paragraph   ?>
    </p>
    <hr>
    <p>
    <h1>Lunghezza paragrafo censurato</h1>
    <p>
        <?php echo strlen($fix_paragraph)  ?>
    </p>
    </p>
</body>

</html>