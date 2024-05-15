<?php
require_once 'auth.php';

if (!is_logged_in()) {
    header('Location: login.php');
    exit();
}

if (!is_admin()) {
    header('Location: access_denied.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h2>Dashboard</h2>
    <p>Benvenuto, <?php echo $_SESSION['username']; ?></p>
    <p><a href="logout.php">Logout</a></p>
    <!-- Aggiungi qui il codice per visualizzare e gestire i dati sensibili -->
</body>

</html>