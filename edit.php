<?php

include __DIR__ . '/auth.php';
include __DIR__ . '/navbar.php';
include __DIR__ . '/class/edit_class.php';
include __DIR__ . '/card.php';



// $myid = $_GET["id"];

// echo $myid;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $myid = $_GET["id"];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $image = $_POST['image'];
    $stmt = $pdo->prepare('UPDATE sensitive_data SET title = :title, text = :text, image = :image WHERE id = :id');
    $stmt->execute([
        'id' => $myid,
        'title' => $title,
        'text' => $text,
        'image' => $image,

    ]);
    header('Location: dashboard.php');
}




?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Edit Article</h1>


            <!-- <form method="post" action="">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="nome" required>
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Text</label>
                    <input type="textarea" class="form-control" name="text" id="text" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" name="image" id="image" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form> -->

            <?php
            $case = [];
            foreach ($article as $e) {
                $case[] = new Edit($e['id'], $e['title'], $e['text'], $e['image']);
                // var_dump($case);
            }

            foreach ($case as $e) {
                $e->render();
            }
            ?>




        </div>
    </div>
</div>