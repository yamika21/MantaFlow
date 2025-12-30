<?php
header('Content-Type: application/json');
require_once 'db_connect.php';   // your existing connection file

$name  = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$age   = $_POST['age'] ?? '';
$notes = trim($_POST['notes'] ?? '');
$event = $_POST['event'] ?? 'Unknown Event';

if (empty($name) || empty($email)) {
    echo json_encode(['status'=>'error','message'=>'Name and email required']);
    exit;
}

try {
    $stmt = $pdo->prepare("INSERT INTO event_registrations 
        (name, email, phone, age_group, notes, event_name, registered_at) 
        VALUES (?, ?, ?, ?, ?, ?, NOW())");
    
    $stmt->execute([$name, $email, $phone, $age, $notes, $event]);

    echo json_encode(['status'=>'success','message'=>'Registered successfully']);
} catch (Exception $e) {
    echo json_encode(['status'=>'error','message'=>'Server error']);
}
?>