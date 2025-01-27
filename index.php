<?php
// Connessione al database
$conn = new mysqli("localhost", "root", "", "quaderno_informatica");

// Controlla se è connessa o no
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// questa query vene usata per selezionare i libri disponibili
$result = $conn->query("SELECT * FROM libri WHERE disponibile = 1");
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca - Libri Disponibili</title>
</head>
<body>
    <h1>Biblioteca - Libri Disponibili</h1>
    <?php if ($result->num_rows > 0): ?>
        <ul>
            <?php while ($row = $result->fetch_assoc()): ?>
                <li>
                    <a href="dettaglio.php?id=<?= $row['id'] ?>">
                        <?= htmlspecialchars($row['titolo']) ?> di <?= htmlspecialchars($row['autore']) ?>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>Nessun libro disponibile al momento.</p>
    <?php endif; ?>
    <a href="aggiungi.php">Aggiungi un nuovo libro</a>
</body>
</html>