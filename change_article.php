<?php

include __DIR__ . '/auth.php';


$myid = $_GET["id"];

echo $myid;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $image = $_POST['image'];
    $stmt = $pdo->prepare("UPDATE sensitive_data SET title = :title, text = :text, image = :image WHERE id = :id");
    $stmt->execute([
        'id' => $myid,
        'title' => $title,
        'text' => $text,
        'image' => $image,

    ]);
    header('Location: dashboard.php');
}
