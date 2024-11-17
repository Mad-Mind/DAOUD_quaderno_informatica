<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Esercizio 6 - Login</title>
</head>
<body>
    <h1>Esercizio 6: Login</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="user">Nome utente:</label>
        <input type="text" id="user" name="user" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Accedi">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = htmlspecialchars($_POST["user"]);
        $password = htmlspecialchars($_POST["password"]);
        if ($user == "admin" && $password == "12345") {
            echo "<p style='color:green;'>Accesso riuscito. Benvenuto, $user!</p>";
        } else {
            echo "<p style='color:red;'>Accesso negato. Controlla le credenziali.</p>";
        }
    }
    ?>
    <a href="index.html">Torna all'indice</a>
</body>
</html>