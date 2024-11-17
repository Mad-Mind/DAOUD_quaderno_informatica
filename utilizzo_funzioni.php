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
</body>
</html>