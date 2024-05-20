<?php


class User
{
    private $username;
    private $password;

    function __construct($username, $password, $pdo)
    {
        $this->username = $username;
        $this->password = $password;

        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        // Verificare se l'utente esiste e controllare la password
        if ($user) {
            if ($password === $user['password']) {
                // Login riuscito
                $_SESSION["username"] = true;
                header("Location: dashboard.php");
                exit(); // Importante per interrompere l'esecuzione del codice
            } else {
                echo "USER or PASSWORD not correct!";
            }
        } else {
            echo "USER or PASSWORD not correct! (result of the second condition)";
            $_SESSION["username"] = false;
        }
    }
}
