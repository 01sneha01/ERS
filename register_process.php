<?php
include 'config.php'; // Database connection
include 'send_email.php';  // Email function
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $event = trim($_POST['event']);
    $tickets = (int)$_POST['ticket_quantity']; // Convert to integer

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($event) || empty($tickets)) {
        $_SESSION["register_error"] = "Please fill in all fields.";
        header("Location: register.php");
        exit;
    }

    // Database connection
    $conn = new mysqli("localhost", "root", "", "event_system");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use Prepared Statements for Security
$stmt = $conn->prepare("INSERT INTO registrations (name, email, phone, event, tickets, status) VALUES (?, ?, ?, ?, ?, 'pending')");


if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}
    $stmt->bind_param("ssssi", $name, $email, $phone, $event, $tickets);

    if ($stmt->execute()) {
        $_SESSION["register_success"] = "Registration successful! Check your email for confirmation.";
        sendConfirmationEmail($email, $name); // Send email
        header("Location: register.php"); // Redirect to avoid resubmission
        exit;
    } else {
        $_SESSION["register_error"] = "Registration failed! Please try again.";
        header("Location: register.php");
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>
