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
</body>
</html>