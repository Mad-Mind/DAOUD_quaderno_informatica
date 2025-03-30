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
    <p>Questa pagina implementa un sistema di autenticazione semplice utilizzando un modulo HTML per l'inserimento del nome utente e della password. Dopo l'invio, il PHP verifica le credenziali confrontandole con un array contenente utenti predefiniti. Le password sono memorizzate in forma hashata utilizzando password_hash(), e la verifica avviene tramite password_verify(). Se le credenziali sono corrette, viene mostrato un messaggio di accesso riuscito; in caso contrario, l'utente riceve un avviso di errore. Questo esercizio mostra un metodo di base per gestire login sicuri in PHP.</p>
</body>
</html>