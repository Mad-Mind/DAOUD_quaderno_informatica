<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Esercizio 3 - Messaggio Personalizzato</title>
</head>
<body>
    <h1>Esercizio 3: Messaggio Personalizzato</h1>
    <?php
    $ora = date("H");
    if ($ora >= 8 && $ora < 12) {
        $messaggio = "Buongiorno";
    } elseif ($ora >= 12 && $ora < 20) {
        $messaggio = "Buonasera";
    } else {
        $messaggio = "Buonanotte";
    }
    echo "<p>$messaggio! Benvenuto nella mia pagina PHP.</p>";
    ?>
    <a href="index.html">Torna all'indice</a>
</body>
</html>