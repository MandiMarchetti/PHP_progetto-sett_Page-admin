<?php

include __DIR__ . '/navbar.php';
include __DIR__ . '/class/home.php';
include __DIR__ . '/verifyLogin.php';
include __DIR__ . '/card.php';


// if ($_SESSION['username']) {
//     echo "You are in!!!";
// }
?>


<div class="container-fluid">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <h1 class="mt-2 mb-5">Welcome to your Dashboard</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

        <?php
        $case = [];
        foreach ($article as $e) {
            $case[] = new Article($e['id'], $e['title'], $e['text'], $e['image']);
            // var_dump($case);
        }
        foreach ($case as $e) {
            $e->render();
        }
        ?>



    </div>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>