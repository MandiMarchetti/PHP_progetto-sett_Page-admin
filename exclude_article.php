<?php

include_once __DIR__ . '/auth.php';



$myid = $_GET["id"];

// DELETE
$stmt = $pdo->prepare("DELETE FROM sensitive_data WHERE id = ?");
$stmt->execute([$myid]);

header('Location: dashboard.php');
