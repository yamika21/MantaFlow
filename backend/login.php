<?php
session_start();
header('Content-Type: application/json');
require_once 'db_connect.php';

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if ($username === '' || $password === '') {
    echo json_encode(['status'=>'error','message'=>'Enter username and password']);
    exit;
}

try {
    // First: Check if user already exists
    $stmt = $pdo->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user) {
        // User exists → check password (plain text)
        if ($password === $user['password']) {
            $_SESSION['user_id']   = $user['id'];
            $_SESSION['username']  = $username;
            echo json_encode(['status'=>'success','message'=>'Welcome back!']);
        } else {
            echo json_encode(['status'=>'error','message'=>'Wrong password']);
        }
    } else {
        // User does NOT exist → AUTO REGISTER THEM!
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $password]);

        $newId = $pdo->lastInsertId();
        $_SESSION['user_id']   = $newId;
        $_SESSION['username']  = $username;

        echo json_encode(['status'=>'success','message'=>'Account created & logged in!']);
    }
} catch (Exception $e) {
    echo json_encode(['status'=>'error','message'=>'Server error']);
}
?>