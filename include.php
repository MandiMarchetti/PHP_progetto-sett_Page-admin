<?php

include __DIR__ . '/auth.php';
include __DIR__ . '/navbar.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $image = $_POST['image'];

    $stmt = $pdo->prepare("INSERT INTO sensitive_data(title,text,image) VALUES (:title,:text,:image) ");
    $stmt->execute([

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
            <h1>Include a new Article</h1>
            <form method="post" action="">
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
            </form>


        </div>
    </div>
</div>