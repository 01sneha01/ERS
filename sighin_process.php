<?php
session_start();
include 'config.php';

// Process registration data
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

try {
    // Insert into database (adjust columns to match your table)
    $query = "INSERT INTO user (name, email, password) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$full_name, $email, $phone]);

    // Redirect to LOGIN.PHP with success message
    $_SESSION["register_success"] = "Registration successful! Please log in.";
    header("Location: login.php"); // Changed from signin.php to login.php
    exit();
} catch (PDOException $e) {
    // Handle errors
    $_SESSION["register_error"] = "Registration failed: " . $e->getMessage();
    header("Location: register.php"); // Redirect back to registration form
    exit();
}
?>