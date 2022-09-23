<?php
include __DIR__ . '/../../../db/dischi.php';

header('Content-Type: application/json');

$data = [
    'success' => true,
    'response' => $dischi
];

echo json_encode($data);