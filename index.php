<?php
    //Creare una variabile con un paragrafo di testo a vostra scelta.
    //Stampare a schermo il paragrafo e la sua lunghezza.
    //Una parola da censurare viene passata dall’utente tramite parametro GET.
    //Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    $frase = 'Il calcolo del contenuto galattico di idrogeno neutro utilizzato con le opportune limitazioni di significato quando si tenga conto delle necessarie condizioni al contorno mediante un\'ovvia scelta dei parametri che definiscono la situazione concreta caratterizza in modo quasi elementare la presenza di strutture stellari anomale e una corretta rappresentazione dei campi magnetici dai quali ci si aspetta un contributo determinante per la soluzione di molti problemi astrofisici.';
    $parola_censurata = $_GET["censura"];
    //http://localhost/PHP/intro_php/php-badwords/?censura=determinante
    echo str_replace($parola_censurata,"***", $frase);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Frase</h1>
    <p><?php $frase ?></p>
    <h2>Numero lettere</h2>
    <span><?php strlen($frase)?> </span>
</body>
</html>
