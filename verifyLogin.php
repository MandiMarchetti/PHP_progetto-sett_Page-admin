<?php

include_once __DIR__ . '/auth.php';
include_once __DIR__ . '/class/users.php';
session_start();

// Verificare se il form è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Ottenere i dati dal form
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username1 = new User($username, $password, $pdo);
    } else {
        echo "Nome utente o password non specificati.";
    }
}
