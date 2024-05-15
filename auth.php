<?php
session_start();

// Connessione al database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pagina_admin';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

// Funzione per il login
function login($username, $password)
{
    global $conn;

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            return true;
        }
    }
    return false;
}

// Funzione per il logout
function logout()
{
    session_unset();
    session_destroy();
}

// Verifica se l'utente è loggato
function is_logged_in()
{
    return isset($_SESSION['user_id']);
}

// Verifica se l'utente è un amministratore
function is_admin()
{
    global $conn;

    if (is_logged_in()) {
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT role FROM users WHERE id='$user_id'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            return $user['role'] === 'admin';
        }
    }
    return false;
}
