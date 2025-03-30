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
    <p>Questa pagina mostra un messaggio di benvenuto personalizzato in base all'ora corrente del server. Utilizzando la funzione date(), il codice controlla l'orario e visualizza un messaggio adeguato: "Buongiorno" se è mattina, "Buonasera" nel pomeriggio e "Buonanotte" durante la notte. Questo esercizio dimostra come ottenere dati temporali in PHP e utilizzarli per personalizzare i contenuti mostrati all'utente.</p>
</body>
</html>