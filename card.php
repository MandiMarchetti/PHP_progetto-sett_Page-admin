<?php

include_once __DIR__ . '/auth.php';

$sql = "SELECT * FROM sensitive_data";
$stmt = $pdo->query($sql);
$article = $stmt->fetchAll();
