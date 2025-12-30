<?php
header('Content-Type: application/json');
require_once 'db_connect.php';
try {
    $count = $pdo->query("SELECT COUNT(*) FROM event_registrations")->fetchColumn();
    echo json_encode(['count' => $count]);
} catch (Exception $e) {
    echo json_encode(['count' => 0]);
}
?>