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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <title>DASHBOARD </title>
</head>

<body>
    <h2>Dashboard</h2>
    <p>Benvenuto, <?php echo $_SESSION['username']; ?></p>
    <p><a href="logout.php">Logout</a></p>
    <!-- Aggiungi qui il codice per visualizzare e gestire i dati sensibili -->
</body>

</html>