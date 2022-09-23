<?php
include __DIR__ . '/../../../db/dischi.php';

$genre = isset($_GET['genre']) ? $_GET['genre'] : null;

if ( $genre ) {
    $dischi = array_filter($dischi, function($disco) use ($genre) {
        return $disco['genre'] == $genre;
    });
}

header('Content-Type: application/json');

$data = [
    'success' => true,
    'response' => array_values($dischi)
];

echo json_encode($data);