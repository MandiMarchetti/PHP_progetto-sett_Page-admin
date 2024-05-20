<?php

include __DIR__ . '/navbar.php';
include __DIR__ . '/class/home.php';
include __DIR__ . '/card.php';
include __DIR__ . '/verifyLogin.php';

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
        <div class="col">
            <div class="row gy-2">
                <?php
                $case = [];
                foreach ($article as $e) {
                    $case[] = new Article($e['id'], $e['title'], $e['text'], $e['image']);
                }
                foreach ($case as $e) {
                    $e->render();
                }
                ?>
            </div>

        </div>
    </div>
</div>



</body>

</html>