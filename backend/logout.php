<?php
session_start();

// Destroy session
session_destroy();
session_unset();

// Clear session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Force redirect with JavaScript fallback
header("Location: ../index.php");

// Add HTML fallback in case header fails
echo '<!DOCTYPE html>
<html>
<head>
    <title>Logging out...</title>
    <meta http-equiv="refresh" content="0;url=../index.php">
    <script>window.location.href = "../index.php";</script>
</head>
<body>
    <p>Logging you out... <a href="../index.php">Click here if not redirected</a></p>
</body>
</html>';
exit();
?>