<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $mailMittente = $_POST["mailMittente"];
            $mailDestinatario = $_POST["mailDestinatario"];
            $oggetto = $_POST["oggetto"];
            $corpo = $_POST["corpo"];

            echo "<h1>Mail creata</h1> <h3>Informazioni</h3>";
            echo "<div style='background-color: DodgerBlue;'> <p>$mailMittente</p> <p>$mailDestinatario</p> <p>$oggetto</p></div>";
            echo "<h3>Corpo della mail</h3>";
            echo "<div style='width: 50%; background-color: orange'><p>$corpo</p></div><hr>";
            echo "<h3>Statistiche corpo mail</h3>";
            echo "<div style='background-color: grey;'><p>Numero caratteri: " .strlen($corpo) . " </p> <p>Numero parole: ". str_word_count($corpo) . "</p></div>";
        ?>
        
    </body>
</html>