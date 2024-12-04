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
        // Array di credenziali predefinite
        $users = [
            "admin" => password_hash("12345", PASSWORD_DEFAULT),
            "user" => password_hash("password", PASSWORD_DEFAULT)
        ];

        // Recupera input utente
        $user = htmlspecialchars($_POST['user']);
        $password = $_POST['password'];

        // Verifica credenziali
        if (array_key_exists($user, $users) && password_verify($password, $users[$user])) {
            echo "<p style='color:green;'>Accesso riuscito. Benvenuto, $user!</p>";
        } else {
            echo "<p style='color:red;'>Accesso negato. Nome utente o password errati.</p>";
        }
    }
    ?>
    <a href="index.html">Torna all'indice</a>
</body>
</html>