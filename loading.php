<?php
header('Content-Type: application/json');

$json = file_get_contents("content.json"); 
$data = json_decode($json, true);

$filteredData = array_filter($data['pokemon'], function($pokemon) {
    return $pokemon["id"] === 1;
});

echo json_encode(array_values($filteredData));