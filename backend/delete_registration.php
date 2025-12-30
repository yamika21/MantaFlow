<?php
header('Content-Type: application/json');
require_once 'db_connect.php';

if (!isset($_POST['id'])) {
    echo json_encode(['status' => 'error', 'message' => 'No ID']);
    exit;
}

$id = (int)$_POST['id'];

try {
    $stmt = $pdo->prepare("DELETE FROM event_registrations WHERE id = ?");
    $stmt->execute([$id]);
    echo json_encode(['status' => 'success', 'message' => 'Deleted']);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>