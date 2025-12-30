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
    // Check if user exists
    $stmt = $pdo->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user) {
        // Login
        if ($password === $user['password']) {
            $_SESSION['user_id']   = $user['id'];
            $_SESSION['username']  = $username;
            echo json_encode(['status'=>'success','message'=>'Welcome back!']);
        } else {
            echo json_encode(['status'=>'error','message'=>'Wrong password']);
        }
    } else {
        // Auto-register new user
        // We need to provide email because it's NOT NULL
        // Option: use a placeholder like "noemail@example.com" or username + domain
        $placeholderEmail = $username . '@example.com';  // simple & unique

        $stmt = $pdo->prepare("
            INSERT INTO users (username, email, password) 
            VALUES (?, ?, ?)
        ");
        $stmt->execute([$username, $placeholderEmail, $password]);

        $newId = $pdo->lastInsertId();
        $_SESSION['user_id']   = $newId;
        $_SESSION['username']  = $username;

        echo json_encode(['status'=>'success','message'=>'Account created & logged in!']);
    }
} catch (Exception $e) {
    // Optional: remove this in production, but helpful for debugging now
    echo json_encode(['status'=>'error','message'=>'Server error: ' . $e->getMessage()]);
}
?>