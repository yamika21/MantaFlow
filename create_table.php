<?php
require_once 'backend/db_connect.php';

$sql = "CREATE TABLE event_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    age_group VARCHAR(20),
    notes TEXT,
    event_name VARCHAR(200),
    registered_at DATETIME
)";

try {
    $pdo->exec($sql);
    echo "<h2 style='color:green;text-align:center;margin-top:100px;'>Table 'event_registrations' created successfully!</h2>";
} catch (Exception $e) {
    echo "<h2 style='color:red;text-align:center;margin:100px;'>Error: " . $e->getMessage() . "</h2>";
}
?>