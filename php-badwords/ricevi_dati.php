<!DOCTYPE html>
<html>
<head>
    <title>Ricevi dati da GET</title>
</head>
<body>
    <?php    
        // Recupera i dati inviati
        $paragrafo = $_GET['paragrafo'];
        $parola = $_GET['parola'];

        // Stampa il paragrafo
        echo "<p><strong>Paragrafo:</strong> $paragrafo</p>";

        // Stampa la parola
        echo "<p><strong>Parola:</strong> $parola</p>";
    
    ?>
</body>
</html>


<!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste molestias eaque ab! Impedit, sint quasi? -->