<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Esercizio 7 - Funzioni</title>
</head>
<body>
    <h1>Esercizio 7: Uso delle Funzioni</h1>
    <?php
    function fattoriale($n) {
        if ($n == 0) {
            return 1;
        } else {
            return $n * fattoriale($n - 1);
        }
    }
    $numero = 5;
    echo "<p>Il fattoriale di $numero è " . fattoriale($numero) . ".</p>";
    ?>
    <a href="index.html">Torna all'indice</a>
    <p>Questa pagina dimostra l'uso delle funzioni in PHP implementando il calcolo del fattoriale di un numero. Il fattoriale viene calcolato utilizzando una funzione ricorsiva, che richiama se stessa riducendo il valore fino ad arrivare a 1. Questo esercizio aiuta a comprendere il concetto di ricorsione, una tecnica molto potente utilizzata in programmazione per risolvere problemi che possono essere suddivisi in sotto-problemi più semplici.</p>
</body>
</html>