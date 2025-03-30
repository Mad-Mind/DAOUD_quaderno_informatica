<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Esercizio 5 - Validazione dei Dati</title>
</head>
<body>
    <h1>Esercizio 5: Validazione dei Dati</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <input type="submit" value="Invia">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = trim($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color:red;'>Indirizzo email non valido.</p>";
        } else {
            echo "<p style='color:green;'>Email valida: $email</p>";
        }
    }
    ?>
    <a href="index.html">Torna all'indice</a>
    <p>Questa pagina presenta un modulo HTML che permette all'utente di inserire un indirizzo email. Quando il modulo viene inviato, il PHP esegue una validazione dell'input utilizzando la funzione filter_var() con il filtro FILTER_VALIDATE_EMAIL. Se l'email inserita è valida, viene confermata con un messaggio positivo, altrimenti viene segnalato un errore. Questo esercizio è fondamentale per apprendere come gestire e validare input utente in PHP, garantendo che i dati ricevuti siano corretti prima di elaborarli ulteriormente.</p>
</body>
</html>