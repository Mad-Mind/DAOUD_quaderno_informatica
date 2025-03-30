<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Esercizio 2 - Tabella Pitagorica</title>
</head>
<body>
    <h1>Esercizio 2: Tabella Pitagorica</h1>
    <table border="1">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <a href="index.html">Torna all'indice</a>
    <p>Questa pagina genera automaticamente una tabella pitagorica, utilizzando due cicli for annidati. Ogni riga e colonna rappresentano numeri da 1 a 10, e ogni cella contiene il risultato della loro moltiplicazione. Il primo ciclo gestisce le righe della tabella, mentre il secondo riempie ogni riga con i valori calcolati. Questo esercizio aiuta a comprendere il funzionamento dei cicli annidati e l'output dinamico in HTML tramite PHP.</p>
</body>
</html>