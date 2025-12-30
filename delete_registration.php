<?php
header('Content-Type: application/json');
require_once 'db_connect.php';

if (!isset($_POST['id'])) {
    echo json_encode(['status'=>'error']);
    exit;
}

try {
    $stmt = $pdo->prepare("DELETE FROM event_registrations WHERE id = ?");
    $stmt->execute([$_POST['id']]);
    echo json_encode(['status'=>'success']);
} catch (Exception $e) {
    echo json_encode(['status'=>'error']);
}
?>