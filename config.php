<?php
$host = "localhost";
$user = "root"; // Change if using a different user
$pass = ""; // Default XAMPP password is empty
$dbname = "event_system";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
