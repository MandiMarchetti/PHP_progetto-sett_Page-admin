<?php

include __DIR__ . '/class/home.php';
include __DIR__ . '/card.php';
include __DIR__ . '/verifyLogin.php';

if ($_SESSION['username']) {
    echo "You are in!!!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <title>DASHBOARD </title>
</head>

<body>
    <h2>Dashboard</h2>
    <div>
        <a class='fw-bold' href="inserisci.php">Insert a new article</a>
    </div>

    <hr>

    <h1 class="mt-5">Welcome you!!!</h1>

    <div class="row gy-3">

        <?php

        $case = [];

        foreach ($articoli as $e) {
            $case[] = new Casa($e['id'], $e['name'], $e['price'], $e['image']);
        }

        foreach ($case as $e) {
            $e->render();
        }





        ?>
    </div>

</body>

</html>