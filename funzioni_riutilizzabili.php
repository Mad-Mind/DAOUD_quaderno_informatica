<?php
include "libreria.php";
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Esercizio 8 - Libreria</title>
</head>
<body>
    <h1>Esercizio 8: Libreria di Funzioni</h1>
    <?php
    $a = 5;
    $b = 3;
    echo "<p>Somma: " . somma($a, $b) . "</p>";
    echo "<p>Moltiplicazione: " . moltiplicazione($a, $b) . "</p>";
    ?>
    <a href="index.html">Torna all'indice</a>
    <p>Questa pagina dimostra come creare e riutilizzare funzioni PHP definite in un file separato, facilitando la modularità del codice. Le funzioni definite includono operazioni matematiche di base come somma e moltiplicazione. Separare il codice in librerie aiuta a mantenere il progetto organizzato e favorisce il riutilizzo del codice in più parti dell'applicazione. Questo approccio è fondamentale nello sviluppo software professionale, in quanto permette di scrivere codice più pulito e manutenibile.</p>
</body>
</html>