<?php

    //Creare una variabile con un paragrafo di testo a vostra scelta
    $text = 'Ciao il mio nome e Paolo e ho 20 anni';

    //Stampare a schermo il paragrafo e la sua lunghezza.
    $lunghezzaText = strlen($text);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Stampare a schermo  la sua lunghezza. -->
    <h2>lunghezza: <?php echo $lunghezzaText ?></h2>

    <!-- Stampare a schermo il paragrafo. -->
    <p><?php echo $text ?></p>


</body>
</html>




<!-- Creare una variabile con un paragrafo di testo a vostra scelta. 
Stampare a schermo il paragrafo e la sua lunghezza. 
Una parola da censurare viene passata dall'utente tramite parametro GET. 
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->