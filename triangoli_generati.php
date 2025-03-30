<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Esercizio 4 - Triangoli di Asterischi</title>
    <style>
        body { font-family: monospace; }
    </style>
</head>
<body>
    <h1>Esercizio 4: Triangoli di Asterischi</h1>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo str_repeat("*", $i) . "<br>";
    }
    ?>
    <a href="index.html">Torna all'indice</a>
    <p>Questa pagina genera un triangolo di asterischi crescente utilizzando un ciclo for. Ad ogni iterazione del ciclo, il numero di asterischi nella riga aumenta, creando una struttura visivamente simile a un triangolo. Questo esercizio è utile per comprendere il funzionamento dei cicli e la manipolazione delle stringhe in PHP, poiché gli asterischi vengono concatenati dinamicamente per formare la figura.</p>
</body>
</html>